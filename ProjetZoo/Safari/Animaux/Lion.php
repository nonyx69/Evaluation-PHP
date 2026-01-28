<?php

namespace Safari\Animaux;

class Lion extends Animaux {

    private int $niveauAgressivite;

    public function __construct($nom, $poids, $niveauAgressivite = 5){
        parent::__construct($nom, $poids);
        $this->niveauAgressivite = $niveauAgressivite;
    }

    public function crier(){
        return "ROAAAAR ! {$this->nom} rugit férocement" . "<br>";
    }

    public function chasser(){
        return "{$this->nom} part en chasse" . "<br>";
    }
}
?>
