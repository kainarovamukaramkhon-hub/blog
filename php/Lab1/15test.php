<?php
$a = 4.3;
 $b = 7.7;
  $c = '5.5';
   $d = '3.4кг';

   //арифметическое округление round()
   //определить пол переменной floor()
   //определить потолок переменной ceil()

   echo ' round('.$a.') = '.round($a).' floor('.$a.') = '.floor($a).' ceil('.$a.') = '.ceil($a);
   echo ' round('.$b.') = '.round($b).' floor('.$b.') = '.floor($b).' ceil('.$b.') = '.ceil($a);
   echo ' round('.$c.') = '.round($c).' floor('.$c.') = '.floor($c).' ceil('.$c.') = '.ceil($a);
   echo ' round('.$d.') = '.round(floatval($d)).' floor('.$a.') = '.floor(floatval($a)).' ceil('.$a.') = '.ceil(floatval($a));

   