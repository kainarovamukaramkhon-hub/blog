<?php
    $str =    '123456123';
    //  является ли строка числом до 12 цифр
    $pattern = '/^\d{1,12}$/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_match($pattern, '!',  $str);   