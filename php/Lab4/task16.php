<?php
    $str = 'xbx aca aea abba adca abea';
    // '!xbx! !aca! !aea! !abba! !adca! !abea!'
    $pattern = '/\b/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);