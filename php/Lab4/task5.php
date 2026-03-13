<?php
    $str =   'my-site123.com';
    //  
    $pattern = '/[a-z0-9-]+\.[a-z]{2,3}/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_match($pattern,  $str);   
