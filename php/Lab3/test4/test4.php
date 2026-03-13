<?php
 $arr = ['1.txt','2.txt','3.txt'];
 foreach($arr as $element){
   $str = file_get_contents($element);
   file_put_contents($element,$str.'!');
   }
   