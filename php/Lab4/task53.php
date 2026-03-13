<?php
    $str =  'aba aca aea abba adca abea';
    // ahb, acb, aeb
    $pattern = '/a.{2}a/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);