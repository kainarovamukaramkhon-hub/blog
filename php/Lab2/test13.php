<?php
$array = ['a', '-', 'b', '-', 'c', '-', 'd'];

// Находим позицию первого элемента '-'
$position = array_search('-', $array);

// Если элемент найден, удаляем его
if ($position !== false) {
    array_splice($array, $position, 1);
}

print_r($array);
?>