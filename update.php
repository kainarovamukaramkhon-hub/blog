<?php

require_once('db.php');
require_once('header.php');
//var_dump($_GET);
//
$sql="SELECT * FROM `friends` WHERE `id`=".$_GET['id'];
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_errno();
$row = mysqli_fetch_assoc($result);
//var_dump($row);
?>
    <div class="div-flex">
        <form action="query.php" method="post">
            <input type="hidden" name="update">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <label for="idFirstname">Фамилия</label>
        <input type="text" name="firstname" id="idFirstsname" value="<?=$row['first name'];?>">
        <label for="idName">Имя</label>
        <input type="text" name="name" id="idName" value="<?=$row['name'];?>">
        <label for="idLastname">Отчество</label>
        <input type="text" name="lastname" id="idlastname" value="<?=$row['last name'];?>">
        <label for="idName">E-mail</label>
        <input type="email" name="email" id="idEmail" value="<?=$row['email'];?>">
        <label for="idPhone">Phone</label>
        <input type="tel" name="phone" id="idPhone" value="<?=$row['phone'];?>">
        <label for="idAdres">Adres</label>
        <textarea type="adres" name="adres" id="idAdres"><?=$row['adres'];?></textarea>
        <button class="btn" type="submit">Изменить</button>
        </form>
    </div>
