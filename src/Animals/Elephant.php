<?php

namespace App\Animals;

use App\Animal;
class Elephant extends Animal
{

    protected function getNoise(): string
    {
        return "toooooout";
    }
}