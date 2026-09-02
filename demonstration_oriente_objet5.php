<?php

// public : accès "de partout"
// private : accès uniquement dans la classe
// protected : (héritage) accès uniquement dans la classe mère et ses filles

class Thermostat {
    // public float $temperatureCible = 19;
    private float $temperatureCible = 19;

    public function getTemperatureCible(): float {
        return $this->temperatureCible;
    }

}

$t1 = new Thermostat(22);

$t1->$temperatureCible = 850;
$t1->$temperatureCible = -350;

?>