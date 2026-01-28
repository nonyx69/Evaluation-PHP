<?php

namespace Safari\Parc;

use Safari\Animaux\Animaux;

class Enclos{
    
    private $animaux = [];
    private $capaciteMax;
    private string $proprete = "Propre";

    public function __construct($capaciteMax = 5){
        $this->capaciteMax = $capaciteMax;
    }

    public function ajouterAnimal(Animaux $nouvelAnimal){
        if (count($this->animaux) >= $this->capaciteMax){
            return "Erreur : Enclos plein !" . "<br>";   
        }

        $this->animaux[] = $nouvelAnimal;
        return "Bienvenue à {$nouvelAnimal->getNom()} !" . "<br>";
    }

    public function entretenir(){
        $this->proprete = "Propre";
        return "Nettoyage en cours..." . "<br>";
    }

    public function visiteGuidee(){
        $message = "Voici les animaux de l'enclos :" . "<br>";
        foreach ($this->animaux as $animal) {
            $message .= $animal->crier();
        }
        return $message;
    }
}
?>
