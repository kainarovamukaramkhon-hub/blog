<?php
    $str = 'aba accca azzza wwwwa';
    //Найти строки a[цифра]a
    $pattern = '/a[^a]+a/';
    $result = preg_replace($pattern, '!', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo "result = $result<BR>";
