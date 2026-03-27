<?php
    $str = 'image.jpg';
    //Проверка окончания на jpg или jpeg
    $pattern = '/\.(jpg|jpeg)$/i';
    $result = preg_match($pattern, $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo  ($result ? 'да' : 'нет') . "<BR>";
?>