<?php

namespace App;

use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): ?Enclosure
    {
        return self::$aviary;
    }

    public static function getFence(): ?Enclosure
    {
        return self::$fence;
    }

    public static function addAnimal(Animal $animal): void{
        switch ($animal){
            case $animal instanceof CanFly:
                if (is_null(self::$aviary)){
                    self::$aviary = new Enclosure();
                }
                self::$aviary->addAnimal($animal);
                break;

            case $animal instanceof CanWalk:
                if (is_null(self::$fence)){
                    self::$fence = new Enclosure();
                }
                self::$fence->addAnimal($animal);
                break;

            case $animal instanceof CanSwim:
                if (is_null(self::$aquarium)){
                    self::$aquarium = new Enclosure();
                }
                self::$aquarium->addAnimal($animal);
                break;
        }
    }

    public static function visitTheZoo(){
        if (!is_null(self::$aquarium)){
            echo "L'aquarium contient : \n";
            self::$aquarium->toString();
        }
        if (!is_null(self::$aviary)){
            echo "La voliere contient : \n";
            self::$aviary->toString();
        }
        if (!is_null(self::$fence)){
            echo "L'enclos contient : \n";
            self::$fence->toString();
        }
    }

}