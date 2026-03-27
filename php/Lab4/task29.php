<?php
    $str = 'baaa waaa caaa daaa eaaa faaa';
    //буква b, затем 3 буквы a
    $pattern = '/(?<=b)aaa/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
