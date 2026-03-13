<?php
    $str = 'a\a a\a a\\a';
    // 'a\\a'
    $pattern = '/a\\\\\\\\a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);