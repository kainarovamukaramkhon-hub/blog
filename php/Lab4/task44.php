<?php
    $str =  '23 2+3 2++3 2+++3 445 677';
    // ahb, acb, aeb
    $pattern = '/2\+*3/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);