<?php
$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;

// Внешний цикл по подмассивам
foreach ($array as $subarray) {
    // Внутренний цикл по элементам подмассива
    foreach ($subarray as $number) {
        $sum += $number;
    }
}

echo "Сумма элементов массива: " . $sum;
?>