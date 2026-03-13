<?php
    $str =  'aa aba abba abbba abbbba abbbbba';
    $pattern = '/ab{4,}a/';
    $result = preg_replace($pattern, '!', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
