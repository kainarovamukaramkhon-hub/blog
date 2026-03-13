<?php
    $str = 'wйw wяw wёw wqw';
    //  
    $pattern = '/w[а-яё]w/u';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!',  $str);