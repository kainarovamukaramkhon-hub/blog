<?php
    $str = 'aba aca aea abba adca abea';
    $pattern = '/ab[b|e]a/';
    $result = preg_replace($pattern, '!', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
