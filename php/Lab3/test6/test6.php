<?php
  $count = file_get_contents('text.txt');
  $count2 = $count ** 2;
  file_put_contents('text.txt', $count2);
  echo $count2;