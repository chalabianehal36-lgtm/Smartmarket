<?php
/**
 * POST /backend/api/placeOrder.php
 * Body: JSON { user_id, name, phone, address, cart, payment }
 */

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$user_id = (int) ($data['user_id'] ?? 0);
$cart    = $data['cart']    ?? [];
$payment = $data['payment'] ?? [];

if (!$user_id || empty($cart)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid order data']);
    exit;
}

// Calculate total
$total = array_reduce($cart, fn($sum, $item) => $sum + ($item['price'] * $item['quantity']), 0);

// --- Insert order ---
$stmt = $conn->prepare(
    "INSERT INTO orders (user_id, date, status, total) VALUES (?, NOW(), 'pending', ?)"
);
$stmt->bind_param('id', $user_id, $total);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Failed to create order']);
    exit;
}

$order_id = $stmt->insert_id;

// --- Insert order items ---
$stmt_item = $conn->prepare(
    "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)"
);

foreach ($cart as $item) {
    $product_id = (int) $item['id'];
    $quantity   = (int) $item['quantity'];
    $price      = (float) $item['price'];
    $stmt_item->bind_param('iiid', $order_id, $product_id, $quantity, $price);
    $stmt_item->execute();
}

// --- Insert payment ---
$method = $payment['method'] ?? 'unknown';
$amount = (float) ($payment['amount'] ?? $total);

$stmt_pay = $conn->prepare(
    "INSERT INTO payments (order_id, amount, status, payment_method, created_at)
     VALUES (?, ?, 'paid', ?, NOW())"
);
$stmt_pay->bind_param('ids', $order_id, $amount, $method);
$stmt_pay->execute();

echo json_encode(['status' => 'success', 'order_id' => $order_id]);
