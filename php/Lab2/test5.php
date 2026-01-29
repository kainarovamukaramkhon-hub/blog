<?php
$array = ['a' => 1, 'b' => 2, 'c' => 3];

$keys = array_keys($array);
$values = array_values($array);
foreach($keys as $key){
    echo $key.' ';
}


foreach($values as $value){
echo $value.'';
}