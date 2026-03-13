<?php
    $str =  'aa aba abba abbba abca abea';
    // ahb, acb, aeb
    $pattern = '/ab+a/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);