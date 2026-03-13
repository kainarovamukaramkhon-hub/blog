<?php
    $file_name = 'test.txt';
    if(file_exists($file_name)) unlink($file_name);
    else file_put_contents($file_name, '123');
    