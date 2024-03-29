<?php
namespace App;

final class Farm
{
    /**
     * Ассоциативный массив, в котором хранятся объекты животных в формате:
     * [Animal::name] => [obj_1, .., obj_1], example: ["Корова" => [Cow(), Cow()], "Курица" => [Chicken(), Chicken()]]
    */
    private array $animals;

    /**
     * Ассоциативный массив, в котором хранятся объекты продукции в формате:
     * [product->name] => obj_product
     */
    private array $products;

    /**
      Первый свободный индивидульный номер
    */
    private int $lastId = 0;

    public function __construct()
    {
        $this->animals = [];
        $this->products = [];
    }

    /**
     * Метод для добавления животного на ферму
     * @param animal - объект животного
     */
    public function addAnimal(Animal $animal): void
    {
        $animal->setId($this->lastId++);
        $this->animals[$animal::$name][] = $animal;
    }

    /**
     * Метод для сбора продукции у всех животных
     */
    public function generateProducts(): void{
        foreach ($this->animals as $animalsArray){
            foreach ($animalsArray as $animal){
                // Собираемя продукты с каждого животного
                $product = $animal->getProductions();
                if (isset($this->products[$product->getName()])) {
                    // Если этот продукт уже есть на складе, добавляем количество
                    $this->products[$product->getName()]->setCount($this->products[$product->getName()]->getCount() + $product->getCount());
                    // Так же вместо ключа к массиву можно бы было использовать $product::class
                    // Но для большей наглядности и тк автолоадер прибавляет \App к названию класса, добавл еще один атрибут
                }
                else{
                    // Если продукта нет, добавляем на склад
                    $this->products[$product->getName()] = $product;
                }
            }
        }

    }

    /**
     * Метод для полученния всех продуктов со склада
     * @return array - массив продуктов
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Метод для полученния всех животных
     * @return array - массив животных
     */
    public function getAnimals(): array
    {
        return $this->animals;
    }
}