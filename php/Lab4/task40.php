<?php
    $str =   'aa aba abba abbba abbbba abbbbba';
    // abba, abbba, abbbba
    $pattern = '/ab{2,4}a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);