<?php
    $str = 'https://example.com';
    //Найти строки 2+3, 2++3, 2+++3
    $pattern = '/^https?:\/\//';
    $result = preg_match($pattern, $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  ($result ? 'да' : 'нет') . "<BR>";
