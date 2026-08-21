<?php
// déclaration d'une variable :
$prenom = "Cathleen";
$age = 36;
$taille = 1.62;
$aPermis = false;

// opérateur ternaire : condition ? valeur_si_vraie : valeur_si_faux
$pseudo = isset($_GET["pseudo-name"]) ? htmlspecialchars($_GET["pseudo-name"]) : ""; // association clé/valeur
$password = isset($_GET["password"]) ? htmlspecialchars($_GET["password"]) : "";

$pseudo = isset($_POST["pseudo-name"]) ? htmlspecialchars($_POST["pseudo-name"]) : "";
$password = isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "";

$pseudo = isset($_REQUEST["pseudo-name"]) ? htmlspecialchars($_REQUEST["pseudo-name"]) : "";
$password = isset($_REQUEST["password"]) ? htmlspecialchars($_REQUEST["password"]) : "";

// déclaration de constantes :

// 1 - mot-clef "const" (fonctionne dans les classes et en dehors)
const MA_CONSTANTE = "hello";

// 2 - méthode define(nom, valeur) '(fonctionne uniquement en dehors d'une classe)
define('PI', 3.141592);

// PI = 3.14;  // pas possible
// MA_CONSTANTE = "coucou" // pas possible 

// récupération des valeurs d'un formulaire :
var_dump($_GET);
print_r($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un Titre</h1>

    <?php 
    echo "Texte";
    ?>

    <?=  "<p>Raccourci echo php</>" ?>

    <?php 
    echo "<p>Tu t'appelles " . $prenom . "</p>"; // opérateur de concaténation
    echo "<p>Tu as $age ans.</p>"; // interpolation de chaînes de caractères
    echo "<p>Pseudo: $pseudo / Mot de passe: $password</p>";
    ?>

    <!-- method: Type d'envoi -->
    <!-- action: Page cible de l'envoi -->
    <h2>Formulaire GET :</h2>
    <form action="." method="get">
        <label for="pseudo-id">Pseudo:</label>
        <input type="text" name="pseudo-name" id="peusdo-id">
        <label for="password">Mot de passe:</label>
        <input type="pasword" name="password" id="password">
        <button>Se connecter</button>
    </form>

    <h2>Formulaire POST :</h2>
    <form action="." method="post">
        <label for="pseudo-id">Pseudo:</label>
        <input type="text" name="pseudo-name" id="peusdo-id">

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password">
        <button>Se connecter</button>
    </form>

    <h2>Opérateurs :</h2>
    <form action="." method="post">
    <label for="nb1">Nombre 1:</label>
    <input type="number" name="nb1" id="nb1" value="<?= $_REQUEST["nb1"] ?>">

    <label for="nb2">Nombre 2:</label>
    <input type="number" name="nb2" id="nb2" value="<?= $_REQUEST["nb2"] ?>">
    <button>Tester</button>
    </form>

    <div>
        
        <?php 
        $nb1 = isset($_REQUEST["nb1"]) ? ($_REQUEST["nb1"]) : 0;
        $nb1 = isset($_REQUEST["nb1"]) ? ($_REQUEST["nb1"]) : 0;


    
        <p>Nombre 1: <?=  $nb1 ?> | <?= gettype($nb1) ?></p>
        <p>Nombre 2: <?=  $nb2 ?> | <?= gettype($nb2) ?></p>
        <p>Somme: <?= $nb1 + $nb2?></p>

        <p>Nombre 1 (converti): <?= $nb1 ?></p>
        ?>

        <h3>Logique:</h3>

        <p>true && true </p>
        <p></p>
        <p></p>
    </div>

    <div>
    <h2>Structures conditionnelles :</h2>

    <?php 
    if (true){
        echo "<p>Coucou</p>";
    }
    if (false){
        // ceci ne sera pas exécuté
    }
    else if (true){
        // ceci sera exécuté
    }
    else{
        // ceci ne sera pas exécuté
    }
    ?>
    </div>

    <div>
        <h2>Structures itératives</h2>
        <?php 

        while (expression_booleenne){
            // Bloc d'instructions
        }

        echo "<ul>";
        // initialisation ; condition d'arrêt ; incrémentation
        for ($i = 1; $i <= 10; $i++){
            echo "<li>$i * 2 = " . $i * 2 . "</li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>