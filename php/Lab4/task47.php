<?php
    $str = 'a.a aba aea';
    // ahb, acb, aeb
    $pattern = '/a\.a/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);