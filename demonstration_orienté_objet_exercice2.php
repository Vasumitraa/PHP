<?php
class Ordinateur{
    public string $marque;
    public function presenter(): string {
        return "Cet ordinateur est un " . $this->marque;
    }
}

$ordinateur1 = new Ordinateur();
$ordinateur2 = new Ordinateur();

$ordinateur1->marque = "Dell";
$ordinateur2->marque = "HP";

echo $ordinateur1->presenter() . "<br>"; // Cet ordinateur est un Dell
echo $ordinateur1->presenter() . "<br>"; // Cet ordinateur est un HP
?>