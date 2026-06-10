<?php
/**
 * POST /backend/api/update_user.php
 * Body: JSON { first_name, last_name, email, phone, address }
 */

session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['status' => 'error', 'message' => 'Not authenticated']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

$stmt = $conn->prepare(
    "UPDATE users SET nom=?, prenom=?, email=?, phone=?, address=? WHERE id=?"
);
$stmt->bind_param(
    'sssssi',
    $data['first_name'],
    $data['last_name'],
    $data['email'],
    $data['phone'],
    $data['address'],
    $_SESSION['user_id']
);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $stmt->error]);
}
