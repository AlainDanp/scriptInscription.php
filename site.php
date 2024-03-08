<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'wsprosite5';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:dbname=wsprosit5;host=localhost:3306;charset=utf8",  'root' ,'');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}
?>
