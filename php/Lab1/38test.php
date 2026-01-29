<?php
$c = -27;
 $b = 12;

 if ($c > 0 && $b > 0){
    echo pow($c, $b);
 }elseif ($c < 0 && $b < 0){
    echo $c + $b;
 }else{
    echo $c * $b;
 }
 ?>
 