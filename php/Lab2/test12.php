<?php
$array = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $array);
echo $position; // Выведет: 1
?>