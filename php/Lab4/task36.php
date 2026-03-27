<?php
    $str = '23 2+3 2++3 2+++3 345 567';
    $pattern = '/2\+{1,}3/';
    preg_match_all($pattern, $str, $matches);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  implode(', ', $matches[0]) . "<BR>";
