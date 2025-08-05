<?php
require_once __DIR__ . '/../../includes/config.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare('DELETE FROM module_projects WHERE id = ?');
    $stmt->execute([$id]);
    echo json_encode(['deleted' => $stmt->rowCount()]);
} else {
    http_response_code(400);
    echo json_encode(['error' => 'Missing id']);
}
?>
