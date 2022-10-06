<?php

namespace App\Animals;

use App\Animal;
class Whale extends Animal
{

    protected function getNoise(): string
    {
        return "splash";
    }
}