<?php
    $str =    'aae xxz 33a';
    //  'a11b22c33'
    $pattern = '/([a-z0-9])\1+/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   