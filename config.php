<?php
$host = 'localhost';
$dbname = 'bookandroll';
$username = 'root';
$password = '';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active le rapport d'erreur sous forme d'exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Définit le mode de récupération par défaut comme tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false, // Désactive l'émulation des déclarations préparées pour utiliser la préparation réelle de la base de données
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
