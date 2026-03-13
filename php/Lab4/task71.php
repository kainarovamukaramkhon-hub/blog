<?php
    $str =    'aa a1a a22a a333a a4444a a55555a aba aca';
    //  
    $pattern = '/a\d*b/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   