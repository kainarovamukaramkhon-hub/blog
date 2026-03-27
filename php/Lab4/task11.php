<?php
    $str =   'aaa@bbb eee7@kkk';
    //  'a11b22c33'
    $pattern = '/([a-z0-9]+)@([a-z0-9]+)/';
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '$2@$1', $str); 