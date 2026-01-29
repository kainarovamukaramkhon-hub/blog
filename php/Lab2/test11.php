<?php
$array = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($array, [0 => '!', 3 => '!!']);
print_r($result);
?>