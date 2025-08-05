<?php
require_once __DIR__ . '/../../includes/config.php';

$data = json_decode(file_get_contents('php://input'), true);

$stmt = $pdo->prepare('INSERT INTO module_projects (user_id, user_updated, name, description, status, start_date, end_date, memo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
$stmt->execute([
    $data['user_id'],
    $data['user_id'],
    $data['name'],
    $data['description'],
    $data['status'],
    $data['start_date'],
    $data['end_date'],
    $data['memo'] ?? null
]);

echo json_encode(['id' => $pdo->lastInsertId()]);
?>
