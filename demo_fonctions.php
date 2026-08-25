<?php

// Démonstration - Les fonctions :

// 1. Anatomie d'une fonction :

// Fonction = retourne une valeur :
function addiction (float $nb1, $nb2): float {
return $nb1 + $nb2;
}

function afficher_message (string $message): void {

}

// 2. Fonction VS méthode VS closure :

// 2.1 Fonction
// cfr. exemple précédent

// 2.2. Méthode (contexte: classe [$this])
class Calculatrice {
    public float $nb1;
    public float $nb2;

    public function addition(){
        return $this->nb1 + $this->nb2;
    }
}

// 2.3 Closure (contexte: variable => transportable): // fonction anonyme ? à détailler...
$additionner = fn(float $a, float $b): float => $a + $b;

// 3. Appel de fonction/méthode/closure :

// 3.1 Fonction :
$resultat = addiction(5, 3);

// 3.2 Méthode :
$calculatrice = new Calculatrice();
$calculatrice->nb1 = 5;
$calculatrice->nb2 = 3;
$resultat = $calculatrice->addition();

// 3.3 Closure :
$resultat$additionner
