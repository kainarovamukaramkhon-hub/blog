<?php
$f = 'string';
$length = strlen($f); // Длина строки "string" = 6
$sum = 0;

// Цикл для подсчета суммы первых N натуральных чисел
for ($i = 1; $i <= $length; $i++) {
    $sum += $i;
}

echo "Длина строки: " . $length . "\n";
echo "Сумма первых " . $length . " натуральных чисел: " . $sum;
?>