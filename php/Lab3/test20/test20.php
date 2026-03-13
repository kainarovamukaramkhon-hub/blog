<?php
    $arr = [ 23,45,65];
    file_put_contents('test.txt', implode(PHP_EOL, $arr));