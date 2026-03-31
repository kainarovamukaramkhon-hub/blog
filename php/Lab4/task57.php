<?php
    $str = 'aAXa aeffa aGha aza ax23a a3sSa';
    // ahb, acb, aeb
    $pattern = '/a[a-zA-Z0-9]+a/';//найти между буквами а любые цифру или буквы (включая заглавные), которые повторяются от 1 и более раз
    echo "str = $str<BR>";
    echo "pattern = $pattern<BR>";
    echo preg_replace($pattern, '!', $str);