<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    // *+, *q+, *qq+, *qqq+
    $pattern = '/\*q{0,3}\+/';
    preg_match_all($pattern, $str, $matches);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  implode(', ', $matches[0]) . "<BR>";
