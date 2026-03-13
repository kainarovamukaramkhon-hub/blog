<?php
    $str =   'aba aea aca aza axa';
    //  
    $pattern = '/a[bex]a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);