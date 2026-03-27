<?php
    $str = 'aaaw aaab aaac aaad aaae aaaf';
    //3 буквы a, затем любая буква, но не b
    $pattern = '/aaa(?=[^b])/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
