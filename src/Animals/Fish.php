<?php

namespace App\Animals;

use App\Animal;

class Fish extends Animal
{

    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}