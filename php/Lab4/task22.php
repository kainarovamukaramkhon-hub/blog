<?php
    $str = 'aa bb cc dd ee ff gg';
    //Найти две одинаковые идущие подряд буквы и заменить вторую на '!'
    $pattern = '/([a-z])(?=\1)/';// надо найти от а до z любую букву и сохранить его 
    $result = preg_replace($pattern, '', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
