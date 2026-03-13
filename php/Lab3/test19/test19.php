<?php
    $file_name = 'test.txt';
    if(!file_exists($file_name)){
     echo 'File doesn`t exist';
     exit; 
    }

    $str = file_get_contents($file_name);
    $arr = explode(PHP_EOL, $str);
    $sum = array_sum($arr); 
    print_r($arr);
    file_put_contents('sum.txt', $sum);

    