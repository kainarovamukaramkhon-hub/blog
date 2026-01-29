<?php
$a = 4.6;
 $b = 7.3; 
 $c = '3.8';
 $d = '7.9кг';


 //арифметическое округление round()
   //определить пол переменной floor()
   //определить потолок переменной ceil()

   echo ' round('.$a.') = '.round($a).' floor('.$a.') = '.floor($a).' ceil('.$a.') = '.ceil($a);
   echo ' round('.$b.') = '.round($b).' floor('.$b.') = '.floor($b).' ceil('.$b.') = '.ceil($b);
   echo ' round('.$c.') = '.round($c).' floor('.$c.') = '.floor($c).' ceil('.$c.') = '.ceil($c);
   echo ' round('.$d.') = '.round(floatval($d)).' floor('.$d.') = '.floor(floatval($d)).' ceil('.$d.') = '.ceil(floatval($d));

   
   