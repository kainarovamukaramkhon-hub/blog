<a href="test27.php?number=1">Ccылка</a>
<?php
if (isset($_GET['number'])){
    if ($_GET['number'] == 1) echo 'привет';
    if ($_GET['number'] == 2) echo 'пока';
} 
