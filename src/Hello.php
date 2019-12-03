<?php

namespace AGodinez\FirstPackage;

class Hello
{
    protected $name;

    public function __construct($name = "Andres")
    {
        $this->name = $name;
    }

    public function hello()
    {
        return "hello from my first package $this->name";
    }
}