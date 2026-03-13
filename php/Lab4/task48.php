<?php
    $str =   'ab abab abab abababab abea';
    // ahb, acb, aeb
    $pattern = '/(ab)+/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);