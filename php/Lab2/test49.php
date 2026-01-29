<?php
// Функция для вычисления суммы цифр числа
function getDigitsSum($number) {
    $sum = 0;
    
    
    // Преобразуем число в строку и перебираем цифры
    $digits = str_split((string)$number);
    
    foreach ($digits as $digit) {
        $sum += (int)$digit;
    }
    
    return $sum;
}

// Находим все года от 1 до 2022, сумма цифр которых равна 13
$years = [];

for ($year = 1; $year <= 2022; $year++) {
    if (getDigitsSum($year) == 13) {
        $years[] = $year;
    }
}

// Выводим результаты
echo "Функция getDigitsSum:\n";
echo "getDigitsSum(49) = " . getDigitsSum(49) . "\n";
echo "getDigitsSum(2022) = " . getDigitsSum(2022) . "\n\n";

echo "Года от 1 до 2022, сумма цифр которых равна 13:\n";
echo "Всего найдено: " . count($years) . " год(а/ов)\n\n";

// Выводим года по 10 в строку для удобства чтения
$counter = 0;
foreach ($years as $year) {
    echo $year . "\t";
    $counter++;
    if ($counter % 10 == 0) {
        echo "\n";
    }
}
?>