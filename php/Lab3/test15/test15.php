<?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    foreach($arr as $element){
        if(file_exists($element))
            echo "$element существует<BR>";
        else{
            echo "$element не существует<BR>";
            }
    }