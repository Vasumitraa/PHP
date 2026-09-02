<?php
class Chaussette {
    public int $pointure_min;
    public int $pointure_max;
    public string $couleur;
    public string $matiere;
    public bool $est_propre = true;

    public function __construct(
        int $pointure_min,
        int $pointure_max,
        string $couleur,
        string $matiere,
        bool $est_propre,
    ) {
        $this->pointure_min = $pointure_min;
        $this->pointure_max = $pointure_max;
        $this->couleur = $couleur;
        $this->matiere = $matiere;
        $this->est_propre = $est_propre;  
    }
}

class Tshirt {
    public function __construct(public string $taille, public string $couleur) {
        
    }
}

$c1 = new Chaussette(35, 38, "blanche", "synthétique", true);

// $c1->pointure_min = 35;
// $c1->pointure_max = 38;
// $c1->couleur = "blanche";
// $c1->matiere = "synthétique";
// $c1->est_propre = true;
?>