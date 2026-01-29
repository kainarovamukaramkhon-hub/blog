<?php
 $a = 5.7;
 $b = 8.3; 
 $c = '5.6';
  $d = '9.2кг';

  //арифметическое округление round()
   //определить пол переменной floor()
   //определить потолок переменной ceil()

   echo ' round('.$a.') = '.round($a).' floor('.$a.') = '.floor($a).' ceil('.$a.') = '.ceil($a);
   echo ' round('.$b.') = '.round($b).' floor('.$b.') = '.floor($b).' ceil('.$b.') = '.ceil($b);
   echo ' round('.$c.') = '.round($c).' floor('.$c.') = '.floor($c).' ceil('.$c.') = '.ceil($c);
   echo ' round('.$d.') = '.round(floatval($d)).' floor('.$d.') = '.floor(floatval($d)).' ceil('.$d.') = '.ceil(floatval($d));

   
   