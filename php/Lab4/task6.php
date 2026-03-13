<?php
    $str =   'мой email kainarova_m@email.com email@gmail.com';
    //  
    $pattern = '/[a-z_]+@[a-z]+\.[a-z]{2,3}/i';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_match_all($pattern,  $str,  $matches);
    print_r($matches);   
