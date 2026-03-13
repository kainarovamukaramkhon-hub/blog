<?php
    $str =   'ave a#b a2b a$b a4b a5b a-b acb';
    //  
    $pattern = '/a\Wb/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   