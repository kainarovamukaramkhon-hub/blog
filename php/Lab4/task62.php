<?php
    $str =  'abcdfa ajkla aABCa aHFGDJSa aHbcda';
    //  
    $pattern = '/a[a-fA-Z]+a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);