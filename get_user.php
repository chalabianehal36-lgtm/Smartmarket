<?php
/**
 * GET /backend/api/get_user.php
 * Requires active session
 */

session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['status' => 'error', 'message' => 'Not authenticated']);
    exit;
}

$stmt = $conn->prepare(
    "SELECT nom AS first_name, prenom AS last_name, email, phone, address
     FROM users WHERE id = ?"
);
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if ($user) {
    echo json_encode($user);
} else {
    http_response_code(404);
    echo json_encode(['status' => 'error', 'message' => 'User not found']);
}
