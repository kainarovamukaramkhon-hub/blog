<?php
$str = "x * 9 = 81";
$arr_char = explode(" ", $str);
print_r($arr_char);
$x_pos = strpos($str, "x");
if ($x_pos == 0) {
    $x_place = "left";
    $operand = $arr_char[2];
}else{
    $x_place = "right";
    $operand = $arr_char[0];
}
$op = $arr_char[1];
$result = $arr_char[4];

switch($op){
    case "/":
        if($x_place == 'left'){
            $x = $result * $operand;
        }
        else{
            $x = $operand / $result;
        }
        break;
    case "*":
        $x = $result / $operand;
        break;
    case "-":
        if($x_place == 'left'){
            $x = $result + $operand;
        }
        else{
            $x = $operand - $result;
        }
        break;
    case "+":
        $x = $result - $operand;
        break;
    default: echo "Error";
}
echo $x;
