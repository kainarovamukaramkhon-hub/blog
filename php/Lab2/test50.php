<?php
// Функция для проверки четности числа
function isEven($number) {
    // Четное число делится на 2 без остатка
    return $number % 2 == 0;
}

// Исходный массив с целыми числами
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

// Новый массив только с четными числами
$evenNumbers = [];

// Перебираем исходный массив
foreach ($numbers as $number) {
    // Используем функцию isEven для проверки
    if (isEven($number)) {
        $evenNumbers[] = $number;
    }
}

// Выводим результаты
echo "Исходный массив: " . implode(', ', $numbers) . "\n";
echo "Четные числа: " . implode(', ', $evenNumbers) . "\n";
?>