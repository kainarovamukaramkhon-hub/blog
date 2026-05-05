<?php

// 1. Интерфейс для фигур, у которых можно вычислить площадь
interface CalculateSquare
{
    public function calculateSquare(): float;
}

// 2. Класс Circle (реализует интерфейс)
class Circle implements CalculateSquare
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateSquare(): float
    {
        return pi() * $this->radius ** 2;
    }
}

// 3. Класс Rectangle (реализует интерфейс)
class Rectangle implements CalculateSquare
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateSquare(): float
    {
        return $this->width * $this->height;
    }
}

// 4. Класс Dog (НЕ реализует интерфейс)
class Dog
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

// 5. Функция для вывода информации о площади объекта
function printSquare(object $obj): void
{
    // get_class() — возвращает имя класса объекта (п.1)
    $className = get_class($obj);

    if ($obj instanceof CalculateSquare) {
        // п.2 — объект реализует интерфейс
        $square = $obj->calculateSquare();
        echo "Объект класса {$className} реализует интерфейс CalculateSquare.\n";
        echo "Площадь: {$square}\n";
    } else {
        // п.3 — объект НЕ реализует интерфейс
        echo "Объект класса {$className} не реализует интерфейс CalculateSquare.\n";
    }
}

// 6. Проверка на разных объектах
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
$dog = new Dog("Бобик");

printSquare($circle);
echo "---\n";
printSquare($rectangle);
echo "---\n";
printSquare($dog);

?>