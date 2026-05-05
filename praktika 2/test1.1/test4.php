<?php

// Родительский класс Lesson
class Lesson
{
    protected string $title;
    protected string $text;
    protected string $homework;

    public function __construct(string $title, string $text, string $homework)
    {
        $this->title = $title;
        $this->text = $text;
        $this->homework = $homework;
    }

    // Геттеры (опционально)
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getHomework(): string
    {
        return $this->homework;
    }
}

// Класс-наследник PaidLesson (платный урок)
class PaidLesson extends Lesson
{
    private float $price;

    // Конструктор с дополнительным параметром price
    public function __construct(string $title, string $text, string $homework, float $price)
    {
        // Вызов конструктора родителя
        parent::__construct($title, $text, $homework);
        $this->price = $price;
    }

    // Геттер для price
    public function getPrice(): float
    {
        return $this->price;
    }

    // Сеттер для price
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}

// Создание объекта класса PaidLesson с заданными параметрами
$paidLesson = new PaidLesson(
    'Урок о наследовании в PHP',
    'Лол, кек, чебурек',
    'Ложитесь спать, утро вечера мудренее',
    99.90
);

// Вывод объекта с помощью var_dump()
var_dump($paidLesson);

?>