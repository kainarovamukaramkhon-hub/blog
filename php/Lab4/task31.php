<?php
    $str = '31-12-2014';
    //Преобразование даты 31-12-2014 → 2014.12.31
    $pattern = '/(\d{2})-(\d{2})-(\d{4})/';
    $result = preg_replace($pattern, '$3.$2.$1', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo "result = $result<BR>";
