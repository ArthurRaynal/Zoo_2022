<?php

namespace App\Animals;

use App\Animal;
class ClownFish extends Animal
{

    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}