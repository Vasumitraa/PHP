<?php
class Livre{
    public function __construct(public string $titre,
    public string $auteur,
    public int $nbPages,
    public float $prix,){}
}

$livre1 = new Livre("Le Petit Prince", "Saint-Exupéry", 96, 7.90);
$livre2 = new Livre("1984", "George Orwell", 328, 9.50);
?>