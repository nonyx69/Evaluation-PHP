<?php

namespace Safari\Animaux;

class Animaux {

    protected $nom;
    protected $poids;
    protected $estMalade = false;

    public function __construct($nom, $poids){
        $this->nom = $nom;
        $this->poids = $poids;
    }

    public function manger(){
        return "L'animal mange<br>";
    }

    public function seSoigner(){
        $this->estMalade = false;
        return "{$this->nom} est soigné !" . "<br>";
    }

    public function tomberMalade(){
        $this->estMalade = true;
        return "{$this->nom} est malade !" . "<br>";
    }

    public function crier(){
        return "{$this->nom} cri" . "<br>";
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPoids(){
        return $this->poids;
    }

    public function estMalade(){
        return $this->estMalade;
    }
}
?>
