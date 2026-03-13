<?php
    $arr = array_sum(file('test.txt'));
    file_put_contents('test.txt', $arr, FILE_APPEND);