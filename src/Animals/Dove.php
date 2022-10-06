<?php

namespace App\Animals;

use App\Animal;
class Dove extends Animal
{

    protected function getNoise(): string
    {
        return "Rou Rouuu";
    }
}