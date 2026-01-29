<a href="test28.php?number=1&number2=8">Ccылка</a>
<?php
if (isset($_GET['number'])){
   // echo $_GET['number'];
    //echo $_GET['number2']; 
    $resul = $_GET['number']+$_GET['number2'];
    echo $resul ;//Выведет 8
} 
