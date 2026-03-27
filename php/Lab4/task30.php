<?php
    $str = 'Ссылки: http://site.ru и http://site.com, а также http://example.org';
    //Домены http://site.ru → site.ru
    $pattern = '/http:\/\/([a-z0-9.-]+\.[a-z]{2,})/';
    $result = preg_replace($pattern, '$1', $str);
    echo "str=$str<BR>";
    echo "pattern = $pattern<BR>";
    echo "result = $result<BR>";
