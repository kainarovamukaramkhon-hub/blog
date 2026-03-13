<?php
    $str = 'aabcdfa ajkla aghia abckla';
    //  
    $pattern = '/a[^g-i ]+a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);