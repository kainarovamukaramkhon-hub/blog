<?php
    $str = 'aaab aaaw aaac aaad aaae aaaf';
    //3 буквы a, затем буква b
    $pattern = '/aaa(?=b)/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
