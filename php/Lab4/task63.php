<?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    // ahb, acb, aeb
    $pattern = '/a.b/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);