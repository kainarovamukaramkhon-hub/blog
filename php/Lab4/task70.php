<?php
    $str =   'avb a1b a2b a3b a4b a5b abb acb';
    //  
    $pattern = '/a\Db/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);   