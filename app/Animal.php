<?php

namespace App;

abstract class Animal
{
    // Уникальный номер животного
    protected int $id;

    // Название класса животного
    static public string $name;

    /**
    * Метод для установки номера животного
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Метод для сбора продукта у живтного
     */
    abstract public function getProductions(): Product;

}