<?php
    $str = "2aaa'3'bbb'4'";
    $pattern = "/'(\d+)'/";//нама надо найти между кавичком любую цифру которое повторяеться от 1 и более раз и виложим на кармашек
    //  Увеличить числа в кавычках в 2 раза
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    // echo preg_replace($pattern, '`', $str);
    echo preg_replace_callback($pattern, 'kvadrat', $str);
    function kvadrat($matches){
        return $matches[1] * $matches[1];
    }
