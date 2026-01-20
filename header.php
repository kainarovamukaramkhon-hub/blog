<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Irish+Grover&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="content.php">Просмотр записей</a>  
            <a href="create.php">Создать новую запись</a>
            <a href="registr.php">Зарегистрироваться</a>
            <a href="login.php">Вход</a>
            <a href="" >Выход</a>  
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'):?>
            <a href="admin.php">Админ</a>
            <?php endif;?>
        </nav>
    </header>
    <main>
        <div class="container irish-grover-regular"> 
