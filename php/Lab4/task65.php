<?php
    $str =  'a0a a1a a2a a3a a4a a5a a6a a7a a8a a9a';
    //  
    $pattern = '/a[3-7]a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);