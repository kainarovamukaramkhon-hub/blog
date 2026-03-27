<?php
    $str = 'aaa * bbb ** eee * **';
    //Заменить только одиночные звездочки на '!'
    $pattern = '/(?<!\*)\*(?!\*)/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
