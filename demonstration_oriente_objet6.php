<?php
class Animal {
    public function __construct(public string $name){}
        public function crier(): string {
            return "{$this->name} fait un cri générique";
        }
}


class Poule extends Animal {
    // redéfinition de méthode (polymorphisme)
    #[Override]
    public function crier(): string
    {
        return "{$this->name} fait cot-cot !";
        }
        }
        
        class Poisson extends Animal {
            #[Override]
            public function __construct(string $name, public string $color){}
            
            public function crier() : string {
                return parent::crier() . " mais de poisson";
                }
                }

                class PoissonChirurgien extends Poisson {

    public function __construct(string $name, string $color) {
        return parent::__construct($name, $color);
    }
}

class Carnivore {

}

class Herbivore {

}

class Zoo {
    
    public function __construct()
    {
        
    }
}
    


$animal = new Animal("Poupoutre");
$poule = new Poule("Tilly");
$poisson = new Poisson("Wanda", "noir et blanc");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Démonstration 6 - Héritage & Polymorphisme</h1>

    <p>Animal: <?= $animal->name ?></p>
    <p>Animal crie: <?= $animal->crier() ?></p>
    <p>Poule: <?= $poule->name  ?></p>
    <p>Poule crie: <?=  $poule->crier() ?></p>
    <p>Poisson: <?=  $poisson->name ?></p>
    <p>Poisson crie: <?=  $poisson->crier() ?></p>
</body>
</html>