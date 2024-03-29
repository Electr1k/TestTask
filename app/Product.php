<?php

namespace App;

class Product
{
    /**
     * Название продукта
    */
    private string $name;
    /**
     * Количество продукта
     */
    private int $count;

    /**
     * Единица измерения
     */
    private string $unit;

    public function __construct(string $name, int $count, string $unit)
    {
        $this->name = $name;
        $this->count = $count;
        $this->unit = $unit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }
}