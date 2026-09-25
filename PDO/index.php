<?php

// Gestion des routes : 
$routes = [

'' => [ // tabkeau associatif ?
    'file' => 'pages/home.php',
    'title' => 'Accueil',
],

'books' => [
    'file' => 'pages/books/read.php',
    'title' => 'Liste des livres',
],

'book-details' => [
    'file' => 'pages/books/read.php',
    'title' => 'Liste des livres',
],

];

// la route existe :

$page = $_GET['page'] ?? ''; // récupération de la page ou renvoie vers l'accueil ?
$route = $routes[$page] ?? null;

// la route n'existe pas :

if ($route === null) {
    $route = [
        'file' => 'pages/errors/not-found.php',
        'title' => "404 not found"];
}

$file = $route["file"];
$title = $route["title"];

require_once 'config/database.php';

// Assembler les pages :

require_once 'partials/header.php';
require_once $file;
require_once 'partials/footer.php';

?>