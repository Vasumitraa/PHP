<?php

// Informations de connexion à la base de données :

$source = "sqlserver";
$host = "localhost";
$dbname = "";

$dsn = "$source:Server=$host;Database=$dbname;TrustServerCertificate=true"; // à détailler
$user = "";
$pass = "";
$options = [];

// tentative de connexion :

try{
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) { // $e = variable contenant le message d'erreur
die("Erreur de connexion : " . $e->getMessage());
}
?>