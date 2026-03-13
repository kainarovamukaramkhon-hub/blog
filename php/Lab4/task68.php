<?php
    $str =  'ave a#a a2a a$a a4a a5a a-a aca';
    //  
    $pattern = '/\s/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   