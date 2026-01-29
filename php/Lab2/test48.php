<?php
// Функция для проверки числа
function isNumberInRange($number) {
    return $number > 0 && $number < 10;
}

// Исходный массив с числами
$numbers = [-5, 0, 3, 7, 12, 9, 1, -2, 10, 8, 15];

// Новый массив для результата
$filteredNumbers = [];

// Перебираем исходный массив
foreach ($numbers as $number) {
    // Используем вспомогательную функцию для проверки
    if (isNumberInRange($number)) {
        $filteredNumbers[] = $number;
    }
}

// Выводим результаты
echo "Исходный массив: " . implode(', ', $numbers) . "\n";
echo "Отфильтрованный массив: " . implode(', ', $filteredNumbers) . "\n";
?>