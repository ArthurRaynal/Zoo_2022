<?php

namespace App\Animals;

use App\Animal;

class CatFish extends Animal
{

    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}