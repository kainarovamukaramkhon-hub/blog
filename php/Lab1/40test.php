<?php
$c = 27;
$b = 12;

if ($c > 0 && $b > 0) {
    $result = pow($c, $b);
} elseif ($c < 0 && $b < 0) {
    $result = $c + $b;
} else {
    $result = $c * $b;
}

echo $result;
?>