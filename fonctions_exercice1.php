<?php
/*Exercice 01 - Carré
Réalisez une fonction calculant le carré d'un nombre entier donné en paramètres. La valeur doit être récupérée depuis un formulaire. */

// Déclarer la fonction :
function square(int $nb): int
{
    return $nb ** 2; // $nb * $nb / "pow" à détailer...
}

// Logique : à détailler...
$number = 0;
$error_message = null;
if (isset($_REQUEST["number"])) {
    if (is_numeric($_REQUEST["number"])) {
        // Récupération de la valeur du formulaire
        $number = $_REQUEST["number"];
        // Appeler la fonction square
        $result = square($number);
    } else {
        $error_message = "Veuillez entrer un nombre entier.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Carré</title>
</head>

<body>
    <h1>Exercice 1 - Carré</h1>
    <form action="fonctions_exercice1.ph" method="post"></form>
    
</body>

</html>