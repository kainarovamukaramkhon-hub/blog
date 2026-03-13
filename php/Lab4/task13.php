<?php
    $str =  'bbb /aaa\ bbb /ccc\\';
    // /...\
    $pattern = '~/[a-z]+\\\~';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);