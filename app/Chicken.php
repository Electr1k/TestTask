<?php

namespace App;

class Chicken extends Animal
{
    static public string $name = "Курица";
    public function getProductions(): Product
    {
        return new Product("Яйцо", rand(0, 1), "шт.");
    }
}