<?php
// Démonstration 02 - Les classes

// On définit une classe avec le mot-clé "class"
// Par convention, le nom est en UpperCamelCase et au singulier
class Chien{
    public string $nom; // une priopriété (caractéristique)
    public function aboyer(): string {
        return $this->nom . " fait wouf !";
    }
}

// 2. Création des objets :
// Utilisation du mot-clé "new" (permet de créer une nouvelle instance en mémoire):
$chien1 = new Chien();
$chien2 = new Chien(); // On fabrique un nouvel objet sur base du MÊME modèle
$chien3 = new Chien(); // On fabrique un nouvel objet sur base du MÊME modèle

// 3. Accéder à un membre d'une classe :
// membre : élément appartenant à la classe = propriété, méthode,...
// Opérateur d'accès au membre : ->
$chien1->nom = "Rouky";
$chien2->nom = "Pluto";
$chien3->nom= "Cerbère";

echo $chien1->aboyer() . "<br>"; // Rouky fait wouf !
echo $chien2->aboyer() . "<br>"; // Pluto fait wouf !
echo $chien3->aboyer() . "<br>"; // Cerbère fait wouf !
?>