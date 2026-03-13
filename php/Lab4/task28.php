<?php
    $str = 'aaa aaa aaa';
    //  
    $pattern = '/aaa$/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);