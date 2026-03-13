<?php
    $str =  'bbb hello , world eee';
    // hello , world
    $pattern = '/ .+ /';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);