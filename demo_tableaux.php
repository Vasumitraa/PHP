<?php
/*
Démonstration - Tableau
*/

// 1 - Déclaration

// 1.1 - Avec le constructeur :
$tab1 = array();
$tab2 = array(5, 9, 4);
$tab3 = array(36, "Cathleen", true, array());

var_dump($tab1);
var_dump($tab2);
var_dump($tab3);

// 1.2 - A la volée :
$tab4 = [];
$tab5 = [36, "Cathleen", true, []];

// 2 -  Récupération d'une donnée dans le tableau :
echo "<p> " . $tab3[1] . "</p>";
echo "<p> " . $tab3[-3] . "</p>";

$tab3[-3] = 42;

echo "<p> " . $tab3[-3] . " </p>"; // index connu

// 3 - Initialisation d'un tableau avec une boucle :

// Récupérer 
echo count($jours) . "<br>"; // 31
echo count($dinner) . "<br>"; // 5

// Vérifier si une valeur est dans le tableau :
echo "Frites dans le tableau : " . in_array("frites", $dinner) . "<br>"; // ""
echo "Salade dans le tableau : " . in_array("salade", $dinner) . "<br>"; // "1"

// Vérifier si la clé est dans le tableau :
    echo "Samedi est dan le tableau : " . array_key_exists("samedi", $dinner) . "<br>"; // ""
    echo "Lundi est dan le tableau : " . array_key_exists("lundi", $dinner) . "<br>"; // "1"

// Obtenir la liste des clés :
echo "Clés : " . print_r(array_keys($dinner)) . "<br>"; // à détailler
echo "Valeurs : " . print_r(array_values($dinner)) . "<br>";

// Ajouter ou retirer une valeur du tableau (dynamique) :

$tab1 = [1, 2, 3, 4, 5]; 

// a. Ajouter à la fin
array_push($tab1, 1, 2, 3, 4, 5);

// b. Retirer de la fin (1 seul) :
$removed_item = array_pop($tab1); // [1, 2, 3, 4, 5, 6] removed_item: 7

// c. Ajouter au début :
array_unshift($tab1, -1, 0); // [-1, 1, 2, 3, 4, 5, 6]

// d. Retirer au début :
$removed_item = array_shift($tab1); // [0, 1, 2, 3, 4, 5, 6] removed_item: -1

// JS: array.map((v) => v + 10)

// Retourner un tableau transformé :
$transformed_array = array_map(fn($v) => $v + 10, $tab1); // à détailler...
print_r($transformed_array);

// Transformer un tableau en une chaîne de caractères : (JS: String.prototype.split)
echo "Tableau : " . implode(", ", $transformed_array) . "<br>";

// Transformer une chaîne de caractères en tableau :
print_r(explode(", ", "10, 11, 12, 13, 14, 15, 16")) . "<br>";

// Filtrer un tableau :
/* JS: Array.propotype.filter(callback)
myArray.filter(v => v % 2 == 0) */

$filtered_array = array_filter($tab1, fn($v) => $v % 2 == 0);
print_r($filtered_array);

// Somme - Différence :
$somme = array_sum($tab1);
$diff = array_diff($tab1);

// Minimum - Maximum :
$min = min($tab1);
$max = max($tab1);

?>