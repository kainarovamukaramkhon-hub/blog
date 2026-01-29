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
        $XVI="Иван Васильевич";
        $XVIII="Пётр Алексеевич";
        $XIX="Николай Павлович";
         //"В XVI веке царствовал Иван Васильевич"
    if (isset($_GET['vivon'])){
        $vek = $_GET['vivon'];        
        echo 'В'.$vek.'веке царствовал'.$XVI;
    }
    