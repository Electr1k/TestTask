<?php

namespace App;

class Product
{
    /**
     * Название продукта
    */
    public string $name;
    /**
     * Количество продукта
     */
    public int $count;

    /**
     * Единица измерения
     */
    public string $unit;

    public function __construct($name, $count, $unit)
    {
        $this->name = $name;
        $this->count = $count;
        $this->unit = $unit;
    }

}