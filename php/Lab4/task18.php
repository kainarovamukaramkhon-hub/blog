<?php
    $str =  'aeeea aeea aea axa axxa axxxa';
    // 
    $pattern = '/a(e*|x*)a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);