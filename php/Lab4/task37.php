<?php
    $str = 'a1a a2a a3a a4a a5a aba aca';
    $pattern = '/a\da/';
    preg_match_all($pattern, $str, $matches);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  implode(', ', $matches[0]) . "<BR>";
