<?php
   $arr = ['1.txt','2.txt','3.txt'];
   $str = '';
    foreach($arr as $element){
     $str .= file_get_contents($element);
     echo $str.'<BR>';
   }
   file_put_contents('new.txt',$str);