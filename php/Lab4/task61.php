<?php
    $str =  'aba aea aca aza axa a-a a#a';
    //  
    $pattern = '/a[^ex ]a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);