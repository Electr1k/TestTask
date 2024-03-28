<?php
require_once('../vendor/autoload.php');

function generateWeek(\App\Farm $farm): void
{
    for ($i = 0; $i < 7; $i++)
        $farm->generateProducts();
}

function countAnimals(\App\Farm $farm): void
{
    $animals = $farm->getAnimals();
    echo "Количество животных:\n";
    foreach ($animals as $name => $animalsArray){
        echo $name.": ".count($animalsArray)."\n";
    }
}


$farm = new \App\Farm();

// Инициализаация фермы
for($i = 0; $i < 20; $i++) {
    if ($i < 10) $farm->addAnimal(animal: new \App\Cow());
    $farm->addAnimal(animal: new \App\Chicken());
}


// Получаем первоначальное кол-во животных
countAnimals($farm);
// Собираем продукцию за первые 7 дней
generateWeek($farm);

$listProducts = $farm->getProducts();
echo "За перые 7 дней было сообрано:\n";
foreach ($listProducts as $product){
    echo $product->name.": ".$product->count." ".$product->unit."\n";
}

echo "\n";

// Добавляем 5 кур и 1 корову
for($i = 0; $i < 5; $i++) {
    if ($i < 1) $farm->addAnimal(animal: new \App\Cow());
    $farm->addAnimal(animal: new \App\Chicken());
}


//Вывводим количество
countAnimals($farm);
// Собираем продукты за 7 дней
generateWeek($farm);

$listProducts = $farm->getProducts();
echo "Всего Было сообрано:\n";
foreach ($listProducts as $product){
    echo $product->name.": ".$product->count." ".$product->unit."\n";
}

