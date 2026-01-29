<?php
$dateMech = date("H:i");
$dateElec = date("d.m.Y H:i:s"); 
$clockMech = "Механические часы";
$clockElec = "Электронные часы";

$result = sprintf("%s: %s | %s: %s", $clockMech, $dateMech, $clockElec, $dateElec);
echo $result;
?>

