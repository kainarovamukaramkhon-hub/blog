<?php
$array = [];
$value = 1;

// Внешний цикл для строк
for ($i = 0; $i < 3; $i++) {
    // Внутренний цикл для столбцов
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $value;
        $value++;
    }
}

echo "Созданный массив:\n";
print_r($array);
?>