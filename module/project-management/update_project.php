<?php
require_once __DIR__ . '/../../includes/config.php';

$data = json_decode(file_get_contents('php://input'), true);

$stmt = $pdo->prepare('UPDATE module_projects SET user_updated = ?, name = ?, description = ?, status = ?, start_date = ?, end_date = ?, memo = ? WHERE id = ?');
$stmt->execute([
    $data['user_updated'],
    $data['name'],
    $data['description'],
    $data['status'],
    $data['start_date'],
    $data['end_date'],
    $data['memo'] ?? null,
    $data['id']
]);

echo json_encode(['updated' => $stmt->rowCount()]);
?>
