<?php
// Рекурсивная функция для получения однозначной суммы цифр
function digitalRoot($number) {
    // Преобразуем число в строку и вычисляем сумму цифр
    $sum = array_sum(str_split(abs($number)));
    
    // Если сумма больше 9, рекурсивно вызываем функцию
    if ($sum > 9) {
        return digitalRoot($sum);
    }
    
    return $sum;
}

// Примеры использования
echo digitalRoot(123) . "\n";      // 6
echo digitalRoot(999) . "\n";      // 9
echo digitalRoot(9876) . "\n";     // 3
echo digitalRoot(12345) . "\n";    // 6
?>