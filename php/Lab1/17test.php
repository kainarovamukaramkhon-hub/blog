<?php
 $a = 5.7; 
 $b = 4.2;
  $c = '7.4';
   $d = '8.9кг';


   //арифметическое округление round()
   //определить пол переменной floor()
   //определить потолок переменной ceil()

   echo ' round('.$a.') = '.round($a).' floor('.$a.') = '.floor($a).' ceil('.$a.') = '.ceil($a);
   echo ' round('.$b.') = '.round($b).' floor('.$b.') = '.floor($b).' ceil('.$b.') = '.ceil($b);
   echo ' round('.$c.') = '.round($c).' floor('.$c.') = '.floor($c).' ceil('.$c.') = '.ceil($c);
   echo ' round('.$d.') = '.round(floatval($d)).' floor('.$d.') = '.floor(floatval($d)).' ceil('.$d.') = '.ceil(floatval($d));

   
   
