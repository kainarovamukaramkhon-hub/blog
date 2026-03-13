<?php
    $str =  '2+3 223 2223';
    // ahb, acb, aeb
    $pattern = '/2\+3/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);