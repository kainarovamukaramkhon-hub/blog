<?php
//$arr =['a', 'b', 'c'];
//$arr = [1, 2, 3];
//print_r(array_keys($arr)); 
//print_r(array_values($arr));
//print_r(array_combine($arr));
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$result = array_combine($keys, $values);
print_r($result);
?>