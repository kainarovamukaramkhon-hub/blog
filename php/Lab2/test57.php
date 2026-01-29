<?php
// Функция для рекурсивного вывода элементов массива
function printArrayRecursive($array, $index = 0) {
    // Базовый случай: если индекс выходит за пределы массива
    if ($index >= count($array)) {
        return;
    }
    
    // Выводим текущий элемент
    echo $array[$index] . "\n";
    
    // Рекурсивный вызов для следующего элемента
    printArrayRecursive($array, $index + 1);
}

// Тестируем функцию
$numbers = [1, 2, 3, 4, 5];
printArrayRecursive($numbers);
?>