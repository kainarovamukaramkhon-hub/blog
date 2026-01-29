<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
<input type="text" name="vivon" id="">   
<button type="submit">voin</button>
</form> 
</body>
</html>


<?php
    if (isset($_GET['vivon'])){
    //    var_dump($_GET['vivon']);
        $massiv_slov = explode(' ',$_GET['vivon']);
        upFunc($massiv_slov);
        echo implode(' ', $massiv_slov);
       // print_r($massiv_slov);
        //var_dump($massiv_slov);
       // print_r($massiv_slov);
        //print_r($massiv_slov);
    }
    function upFunc(&$massiv_slov){
        for($i = 0; $i < count($massiv_slov); $i++){
            if(($i % 2) > 0){
                $massiv_slov[$i] = strtoupper($massiv_slov[$i]);
            }
        }
    }









