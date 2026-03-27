<?php
    $str = 'aa aba abba abbba abbbba abbbbba';
    $pattern = '/ab{4,}a/';
    preg_match_all($pattern, $str, $matches);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  implode(', ', $matches[0]) . "<BR>";
