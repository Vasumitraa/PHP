<?php
class Rectangle {
    public float $largeur;
    public float $hauteur;

    public function surface(): float { // ": type" = qu'est-ce que la fonction retourne ?
        return $this->largeur * $this->hauteur;
    }

    public function perimetre(): float {
        return ($this->largeur . $this->hauteur) * 2;
    }

    public function estCarre(): bool {
        // if ($this->largeur == $this->hauteur) return true;
        return $this->largeur == $this->hauteur;
    }

    public function decrire(): string {
        return sprintf(
            "Rctangle %.2fx%.2f : surface = %.2f, périmètre = %.2f. %s",
            $this->hauteur,
            $this->largeur,
            $this->surface(),
            $this->perimetre(),
            $this->estCarre() ? "C'est un carré !" : "Ce n'est pas un carré."
        );
    }
}

$r1 = new Rectangle();
$r2 = new Rectangle();

$r1->largeur = 4;
$r1->hauteur = 4;

$r2->largeur = 5;
$r2->hauteur = 3;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3.1 - La classe rectangle</title>
</head>
<body>
    <h1>Exercice 3.1 - La classe Rectangle</h1>

    <p>Rectangle 1: <?= $r1->decrire() ?></p>
    <p>Rectangle 2: <?= $r2->decrire() ?></p>
</body>
</html>