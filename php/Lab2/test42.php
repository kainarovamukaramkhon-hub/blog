<?php
$arr = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];

foreach ($arr as $name => $salary) {
    echo $name . ' - зарплата ' . $salary . ' долларов.' . "\n";
}
?>