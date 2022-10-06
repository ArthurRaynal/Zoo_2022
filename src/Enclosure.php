<?php

namespace App;

class Enclosure
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void {
        $this->animals[] = $animal;
    }
    public function toString(): void{
        foreach ($this->animals as $animal){
            echo "{$animal->getName()} \n";
        }
    }
}