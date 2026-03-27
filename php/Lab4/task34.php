<?php
    $str = 'document.html';
    //Проверка начала на http или https
    $pattern = '/\.(txt|html|php)$/i';
    $result = preg_match($pattern, $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  ($result ? 'да' : 'нет') "<BR>";