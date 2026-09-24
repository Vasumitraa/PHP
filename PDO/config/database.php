<?php

// Informations de connexion à la base de données :

$source = "sqlsrv";
$host = "localhost";
$dbname = "";

$dsn = "$source:Server=$host;Database=$dbname;TrustServerCertificate=true"; // à détailler...
$user = "";
$pass = "";
$options = [];

// Tentative de connexion :

try {
$pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOExeption $e) { // $e = variable contenant le message d'erreur
die("Erreur de connexion : " . $e->getMe);
}
?>