<?php
// Вариант 1: Цикл с постусловием (do-while)
echo "Цикл с постусловием (do-while):\n";
$count = 0;
$sum = 0;
$number = 1;
$numbers1 = [];

do {
    if ($number % 3 == 0) {
        $sum += $number;
        $numbers1[] = $number;
        $count++;
    }
    $number++;
} while ($count < 15);

echo "Числа: " . implode(', ', $numbers1) . "\n";
echo "Сумма: " . $sum . "\n\n";

// Вариант 2: Цикл с предусловием (while)
echo "Цикл с предусловием (while):\n";
$count = 0;
$sum = 0;
$number = 3; // Начинаем с первого числа, кратного 3
$numbers2 = [];

while ($count < 15) {
    $sum += $number;
    $numbers2[] = $number;
    $number += 3; // Следующее число, кратное 3
    $count++;
}

echo "Числа: " . implode(', ', $numbers2) . "\n";
echo "Сумма: " . $sum . "\n\n";

// Проверка результата
echo "Проверка:\n";
echo "Первые 15 чисел, кратных 3: 3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42, 45\n";
echo "Сумма = 3 + 6 + 9 + ... + 45 = 360\n";
?>