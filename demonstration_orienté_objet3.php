<?php
// Démonstration 03 - Les attributs / méthodes

class CompteurDeVues {
    // Attributs (caractéristiques)
    public string $page;
    public int $compteur = 0 ; // Déclaration + initialisation

    // Méthodes

    // Procédure: ne retourne rien 
    public function ajouterUneVue(): void {
        // $this->compteur = $this->compteur + 1; $this->compteur += 1;
        $this->compteur++;
    }

    public function ajouterPlusieursVues(int $number = 10): void {
        /*if ($number > 0) {
            $this->compteur += $number;
        } else {
            return;
        }*/

        // Fail Fast Pattern
        if ($number <= 0) return;
        $this->compteur += $number;
    }

    // Fonction: retourne une valeur => type
    public function est_populaire(): bool {

        return $this->compteur >= 100;
    }

    // Méthode qui appelle une autre méthode définit dans la classe
    public function resumer(): string {
        $etat = $this->est_populaire() ? "populaire" : "non populaire"; // à détailler...
        return "[$etat] La page " . $this->page . " a " . $this->compteur . " vue(s)";
    }
}

$accueil = new CompteurDeVues();

$accueil->page = "/accueil";
echo $accueil->resumer() . "<br>";

$accueil ->ajouterUneVue();
echo $accueil->resumer() . "<br>";

$accueil->ajouterPlusieursVues();
echo $accueil->resumer() . "<br>";

$accueil->ajouterPlusieursVues(150);
echo $accueil->resumer() . "<br>";