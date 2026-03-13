<?php
    $str =  'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
    // ahb, acb, aeb
    $pattern = '/[а-яА-яёЁ]+/u';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);