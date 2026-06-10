<?php
/**
 * POST /backend/api/login.php
 * Body: email, password (form data)
 * Returns JSON
 */

session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

$email    = trim($_POST['email']    ?? '');
$password = trim($_POST['password'] ?? '');

if (!$email || !$password) {
    echo json_encode(['status' => 'error', 'message' => 'Missing fields']);
    exit;
}

$stmt = $conn->prepare(
    "SELECT id, nom, prenom, email, password, phone, address FROM users WHERE email = ?"
);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['status' => 'email_not_found']);
    exit;
}

$user = $result->fetch_assoc();

if (!password_verify($password, $user['password'])) {
    echo json_encode(['status' => 'wrong_password']);
    exit;
}

$_SESSION['user_id'] = $user['id'];

echo json_encode([
    'status'  => 'success',
    'id'      => $user['id'],
    'nom'     => $user['nom'],
    'prenom'  => $user['prenom'],
    'email'   => $user['email'],
    'phone'   => $user['phone'],
    'address' => $user['address'],
]);
