<?php
    $str =   'mymail@mail.ru';
    //  
    $pattern = '/^[a-z]+@[a-z]+\.[a-z]{2,3}$/i';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_match_all($pattern,  $str,  $matches);
    print_r($matches);   
