<?php
    $file_name = 'test.txt';
    if(!file_exists($file_name)){
     echo 'File doesn`t exist';
     exit; 
    }

    $str = file_get_contents($file_name);
    $arr = explode(PHP_EOL, $str);
    print_r($arr);

    