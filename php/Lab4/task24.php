<?php
    $str = 'aaa * bbb ** eee *** kkk ****';
    //Заменить только двойные звездочки на '!'
    $pattern = '/(?<!\*)\*\*(?!\*)/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);
