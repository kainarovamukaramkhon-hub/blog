<?php
    $str = 'waaa baaa caaa daaa eaaa baaa faaa';
    $pattern = '/(?<=[^b])aaa/';
    $result = preg_replace($pattern, '!', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
