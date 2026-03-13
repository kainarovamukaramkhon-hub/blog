<?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    // ahb, acb, aeb
    $pattern = '/a[a-z]+a/';
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);