<?php
    $str = "'1' '2' '3' '4' ";
    //Заменить числа на их квадраты
    $pattern = "/(\d+)/";
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    // echo preg_replace($pattern, '`', $str);
    echo preg_replace_callback($pattern, 'kvadrat', $str);
    function kvadrat($matches){
        return "'" . ($matches[1] * $matches[1]) . "'";
    }


