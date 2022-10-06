<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Parrot;
use App\Animals\Fish;
use App\Animals\Zebra;
use App\Zoo;

$animalsList = [
    Fish::class=>['Fisha','Fishb','Fishc','Fishd','Fishe'],
    BubbleFish::class=>['Buba','Bubb','Bubc'],
    CatFish::class=>['Cata','Catb'],
    ClownFish::class=>['clowna'],
    Elephant::class=>['Elea','Eleb'],
    Zebra::class=>['Zeba'],
    Parrot::class=>['Parra','Parrb','Parrc','Parrd','Parre','Parrf','Parrg','Parrh','Parri','Parrj'],
    Dove::class=>['Dova','Dovb']
];

$animals = [];

foreach ($animalsList as $type=>$nameList){
    foreach ($nameList as $name){
        $animals[] = new $type($name);
    }
}

foreach ($animals as $animal){
    Zoo::addAnimal($animal);
}

Zoo::visitTheZoo();