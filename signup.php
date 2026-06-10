<?php
/**
 * POST /backend/api/signup.php
 * Body: nom, pre, num, email, add, mdp (form data)
 */

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

$nom      = trim($_POST['nom']   ?? '');
$prenom   = trim($_POST['pre']   ?? '');
$phone    = trim($_POST['num']   ?? '');
$email    = trim($_POST['email'] ?? '');
$address  = trim($_POST['add']   ?? '');
$password = password_hash($_POST['mdp'] ?? '', PASSWORD_DEFAULT);

if (!$nom || !$prenom || !$email || !($_POST['mdp'] ?? '')) {
    echo json_encode(['status' => 'error', 'message' => 'Missing required fields']);
    exit;
}

// Check duplicate email
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
if ($stmt->get_result()->num_rows > 0) {
    echo json_encode(['status' => 'exists']);
    exit;
}

// Insert
$stmt = $conn->prepare(
    "INSERT INTO users (nom, prenom, phone, email, address, password) VALUES (?, ?, ?, ?, ?, ?)"
);
$stmt->bind_param('ssssss', $nom, $prenom, $phone, $email, $address, $password);

if ($stmt->execute()) {
    echo json_encode([
        'status' => 'success',
        'id'     => $stmt->insert_id,
        'nom'    => $nom,
        'email'  => $email,
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Insert failed']);
}
