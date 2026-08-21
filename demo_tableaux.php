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
