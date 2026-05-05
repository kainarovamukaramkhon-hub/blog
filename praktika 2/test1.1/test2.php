<?php

class Cat
{
    private string $name;
    private string $color;   // сделано приватным (п.2)

    // Добавлен второй аргумент для цвета (п.2)
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // Геттер для цвета (п.3)
    public function getColor(): string
    {
        return $this->color;
    }

    // Дополненный метод sayHello() с упоминанием цвета (п.1)
    public function sayHello(): string
    {
        return "Мяу! Меня зовут " . $this->name . ", я " . $this->color . " цвета.";
    }
}

// Пример использования
$cat1 = new Cat("Мурка", "белого");
$cat2 = new Cat("Барсик", "рыжего");

echo $cat1->sayHello() . "\n";
echo $cat2->sayHello() . "\n";

// Проверка геттера:
echo "Цвет кошки: " . $cat1->getColor();

?>