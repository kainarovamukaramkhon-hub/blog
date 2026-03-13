<?php
    $str =   'aaa bcd xxx efg';
    //  'a11b22c33'
    $pattern = '/([a-z])\1+/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   