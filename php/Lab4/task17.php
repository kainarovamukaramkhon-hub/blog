<?php
    $str =  'aeeea aeea aea axa axxa axxxa';
    // '!xbx! !aca! !aea! !abba! !adca! !abea!'
    $pattern = '/a(e{2}|x+)a/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);