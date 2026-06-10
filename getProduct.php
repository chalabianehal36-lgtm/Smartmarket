<?php
/**
 * GET /backend/api/getProduct.php?id={id}
 */

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

$id = (int) ($_GET['id'] ?? 0);

if ($id <= 0) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid product ID']);
    exit;
}

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$row = $stmt->get_result()->fetch_assoc();

if (!$row) {
    http_response_code(404);
    echo json_encode(null);
    exit;
}

// Normalize colors → array
$row['colors'] = !empty($row['colors'])
    ? array_map('trim', explode(',', $row['colors']))
    : [];

// Fallback image
if (empty($row['image'])) {
    $row['image'] = 'https://via.placeholder.com/450x400';
}

// Normalize name field
if (empty($row['name']) && !empty($row['nom'])) {
    $row['name'] = $row['nom'];
}

echo json_encode($row, JSON_UNESCAPED_UNICODE);
