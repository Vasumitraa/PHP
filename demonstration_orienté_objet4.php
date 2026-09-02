<?php
// Création d'un objet par un constructeur :

class Chaussette {
    
    public int $pointure_min;
    public int $pointure_max;
    public string $couleur;
    public string $matiere;
    public bool $est_propre = true;

    /* Par défaut, il y a le constructeur "par défaut.
    Si on ajoute notre propre constructeur, on écraser le constructeur par défaut, par le notre */

    public function __construct(
        int $pointure_min,
        int $pointure_max,
        string $couleur,
        string $matiere,
        bool $est_propre = true,
    ) {
        $this->pointure_min = $pointure_min;
        $this->pointure_max = $pointure_max;
        $this->couleur = $couleur;
        $this->matiere = $matiere;
        $this->est_propre = $est_propre;  
    }
}

// Création dun constructeur - version 8 :

class Tshirt {
    public function __construct(public string $taille = "S", public string $couleur = "noir") {}
}

$c1 = new Chaussette(36, 38, "blanche", "synthétique", true);

// $c1->pointure_min = 36;
// $c1->pointure_max = 38;
// $c1->couleur = "blanche";
// $c1->matiere = "synthétique";
// $c1->est_propre = true;

$c2 = new Chaussette(39, 41, "noire", "coton", false);
$c3 = new Chaussette(42, 44, "rouge", "cachemire");

$t1 = new Tshirt("XL", "noir");
$t2 = new Tshirt("L", "violet");
$t3 = new Tshirt();
$t4 = new Tshirt("L");
$t5 = new Tshirt(couleur: "rose");
?>
