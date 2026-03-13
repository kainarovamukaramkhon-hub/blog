<?php
    $str =   ' http://site.ru';
    //  'a11b22c33'
    $pattern = '#https?://[a-z]+\.[a-z]{2,3}#i';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_match($pattern,  $str);   