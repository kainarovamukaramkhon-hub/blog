<?php
// Функция для получения всех делителей числа
function getDivisors($number) {
    $divisors = [];
    
    // Проверяем числа от 1 до самого числа
    for ($i = 1; $i <= abs($number); $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    
    return $divisors;
}

// Функция для получения общих делителей двух чисел
function getCommonDivisors($num1, $num2) {
    // Получаем делители для каждого числа
    $divisors1 = getDivisors($num1);
    $divisors2 = getDivisors($num2);
    
    // Находим пересечение массивов (общие делители)
    $commonDivisors = array_intersect($divisors1, $divisors2);
    
    // Возвращаем как обычный массив (переиндексированный)
    return array_values($commonDivisors);
}

// Тестирование функций
echo "Функция getDivisors(12):\n";
print_r(getDivisors(12));

echo "\nФункция getDivisors(18):\n";
print_r(getDivisors(18));

echo "\nФункция getCommonDivisors(12, 18):\n";
print_r(getCommonDivisors(12, 18));
?>