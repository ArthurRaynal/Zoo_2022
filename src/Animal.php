<?php

namespace App;

abstract class Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    private string $name;

    public function getName(): string{
        return $this->name;
    }
    protected abstract function getNoise(): string;

    public function noise(): string{
        return $this->getNoise();
    }
}