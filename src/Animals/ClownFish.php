<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;

class ClownFish extends Animal implements CanSwim
{

    protected function getNoise(): string
    {
        return "bloubloublou";
    }
}