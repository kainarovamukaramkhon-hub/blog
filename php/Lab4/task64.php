<?php
    $str =  'aaa aba aca ada aea afa aga aha aia aja';
    //  
    $pattern = '/a[a-g]a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);