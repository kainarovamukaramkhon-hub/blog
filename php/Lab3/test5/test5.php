<?php
  $count = file_get_contents('count.txt');
  $count++;
  file_put_contents('count.txt', $count);
  echo $count;