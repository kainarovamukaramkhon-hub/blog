<?php

require_once('db.php');
require_once('header.php');
//var_dump($_GET);
$sql="SELECT * FROM `friends` WHERE `id`=".$_GET['id'];
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_errno();
$row = mysqli_fetch_assoc($result);
//var_dump($row);
?>
    <div class="div-flex">
        <label for="idFirstname">Фамилия</label>
        <input type="text" name="firstname" id="idFirstsname" value="<?=$row['first name'];?>"readonly>
        <label for="idName">Имя</label>
        <input type="text" name="name" id="idName" value="<?=$row['name'];?>"readonly>
        <label for="idLastname">Отчество</label>
        <input type="text" name="lastname" id="idlastname" value="<?=$row['last name'];?>"readonly>
        <label for="idName">E-mail</label>
        <input type="email" name="email" id="idEmail" value="<?=$row['email'];?>"readonly>
        <label for="idPhone">Phone</label>
        <input type="tel" name="phone" id="idPhone" value="<?=$row['phone'];?>"readonly>
        <label for="idAdres">Adres</label>
        <textarea type="adres" name="adres" id="idAdres" readonly><?=$row['adres'];?></textarea>
        <a class="btn" href="update.php?id=<?=$row['id'];?>">Update friend</a> 
        <a class="btn" href="query.php?id=<?=$row['id'];?>">Delete friend</a> 
    <form action="" method="post"></form>
        <label for="idComment">Оставьте коментарий</label>
        <textarea name="comment" id="Comment"></textarea>
        <button type="submit">Сохранить</button>
    </from>
    </div>
