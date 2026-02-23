<?php
$host = 'localhost';
$dbname = 'gestion_lego'; // Remplace par le nom créé dans phpMyAdmin
$username = 'root';
$password = ''; // Par défaut sur XAMPP, il n'y a pas de mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ça plante, ce message s'affichera sur ton navigateur
    die("Erreur de connexion : " . $e->getMessage());
}
?>