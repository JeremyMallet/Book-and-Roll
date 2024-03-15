<?php
require 'config.php';

$evenementId = $_GET['evenementId'] ?? '';

$sql = "SELECT * FROM tables WHERE evenement_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$evenementId]);
$tables = $stmt->fetchAll();

echo json_encode($tables);
