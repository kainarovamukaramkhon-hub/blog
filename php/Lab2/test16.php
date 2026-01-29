<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$result = '';

// Цикл пока массив не пуст
while (!empty($array)) {
    // Берем первый элемент
    if (!empty($array)) {
        $result .= array_shift($array);
    }
    
    // Берем последний элемент
    if (!empty($array)) {
        $result .= array_pop($array);
    }
}

echo $result; // Выведет: 18273645
?>