<?php
$arr = [1, 2, 3, 4, 5];
$result = 0;

foreach ($arr as $element) {
    $result += $element * $element; // или $result += $element ** 2;
}

echo "Сумма квадратов элементов: " . $result;
?>