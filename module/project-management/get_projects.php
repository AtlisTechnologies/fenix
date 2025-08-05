<?php
require_once __DIR__ . '/../../includes/config.php';

$stmt = $pdo->query('SELECT * FROM module_projects');
$projects = $stmt->fetchAll();

echo json_encode($projects);
?>
