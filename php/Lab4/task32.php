<?php
    $str = 'abc 123 def 456 ghi 789 jkl';
    // Сумма всех чисел в строке
    $pattern = '/\d+/';
    preg_match_all($pattern, $str, $matches);
    $sum = array_sum($matches[0]);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo "Найденные числа: " . implode(', ', $matches[0]) . "<BR>";
    echo "Сумма чисел: $sum<BR>";
?>