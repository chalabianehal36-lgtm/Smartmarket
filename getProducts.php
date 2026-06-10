<?php
/**
 * GET /backend/api/getProducts.php
 * Optional: ?category=electronique
 */

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';

$category = trim($_GET['category'] ?? '');

if ($category !== '') {
    $stmt = $conn->prepare(
        "SELECT p.*, c.name AS category
         FROM products p
         LEFT JOIN categories c ON p.category_id = c.id
         WHERE c.name = ?"
    );
    $stmt->bind_param('s', $category);
} else {
    $stmt = $conn->prepare(
        "SELECT p.*, c.name AS category
         FROM products p
         LEFT JOIN categories c ON p.category_id = c.id"
    );
}

$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products, JSON_UNESCAPED_UNICODE);
