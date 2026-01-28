<?php

namespace Safari\Animaux;

class Perroquet extends Animaux {

    public function crier(){
        return "Coco veut un gâteau ! ({$this->nom} siffle)" . "<br>";
    }

    public function voler(){
        return "Le perroquet s'envole<br>";
    }
}
?>
