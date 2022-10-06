<?php

namespace App\Animals;

use App\Animal;

class BubbleFish extends Animal
{

    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}