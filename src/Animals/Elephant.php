<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk
{

    protected function getNoise(): string
    {
        return "toooooout";
    }
}