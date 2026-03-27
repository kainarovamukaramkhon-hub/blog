<?php
    $str = 'aa bb cc dd ee ff gg';
    //([a-z]) Найти две одинаковые идущие подряд буквы и заменить первую на '!'
    $pattern = '/([a-z])(?=\1)/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
