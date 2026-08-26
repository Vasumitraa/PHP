<?php
class Eleve {
    // Attributs (= caractéristiques)
    public string $nom;
    public string $prenom;
    public array $notes;

    // Méthodes ( = comportements)
    function moyenne(): float{
        return array_sum($this->notes) / count($this->notes);
    }
}

$eleve1 = new Eleve();
$eleve1->nom = "Doe";
$eleve1->prenom = "John";
$eleve1->notes = [14, 12, 10, 13];
echo "Moyenne de l'élève 1: " . $eleve1->moyenne() . "<br>";

$eleve2 = new Eleve();
$eleve2->nom = "Doe";
$eleve2->prenom = "Jane";
$eleve2->notes = [15, 11, 11, 12];
echo "Moyenne de l'élève 2: " . $eleve2->moyenne() . "<br>";
?>