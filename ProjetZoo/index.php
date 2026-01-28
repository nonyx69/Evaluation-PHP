<?php

spl_autoload_register(function ($class){
    $file = str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) require $file;
});

use Safari\Parc\Enclos;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;

$enclos = new Enclos(3);

$lion = new Lion ("Simba", 150);
$perroquet1 = new Perroquet ("Rio", 2);
$perroquet2 = new Perroquet ("Jago", 3);

echo $enclos->ajouterAnimal($lion);
echo $enclos->ajouterAnimal($perroquet1);
echo $enclos->ajouterAnimal($perroquet2);

echo $enclos->visiteGuidee();

$lion->tomberMalade();
$lion->seSoigner();

?>