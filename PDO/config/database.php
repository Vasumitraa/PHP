<?php

// Informations de connexion à la base de données :

$source = "sqlserver";
$host = "localhost"; // si erreur, mettre le nom de l'instance sur laquelle tourne le serveur (Serveur Name sur SSMS ?) ex: "WAD26-02\IF3" sur PC Centre / VASUMITRA\IF3 PC portable
$dbname = "demo_pdo";

$dsn = "$source:Server=$host;Database=$dbname;TrustServerCertificate=true"; // à détailler...
$user = "demo_user";
$pass = "Test1234="; // pourquoi cela ne fonctionnerait pas si on change le MDP ici ? Car il est renseigné dans la DB ?
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // à détailler... (se renseigner sur la classe PDO)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// Tentative de connexion :

try{
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo "Connected"; -> pour vérifier que la connexion se fait correctement
} catch (PDOException $e) { // $e = variable contenant le message d'erreur
die("Erreur de connexion : " . $e->getMessage());
}
?>