<?php

namespace App;

class Cow extends Animal
{
    static public string $name = "Корова";

    public function getProductions(): Product
    {
        return new Product("Молоко", rand(8, 12), "л.");
    }
}