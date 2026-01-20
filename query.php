<?php session_start();?>

<?php require('DB.php');?>
<?php 
//1 query
if(isset($_POST['create'])){
    $sql = "INSERT INTO `friends`
            (`first name`, `phone`, `email`, `adres`, `name`, `last name`, `User_id`) 
            VALUES (
            '".$_POST['firstname']."',
            '".$_POST['phone']."',
            '".$_POST['email']."',
            '".$_POST['adres']."',
            '".$_POST['name']."',
            '".$_POST['lastname']."',
            '".$_SESSION['user_id']."'
            )";
    $result = mysqli_query($mysqli, $sql); 
    if (mysqli_errno($mysqli)) echo mysqli_errno();
    header("Location:http://localhost/kaynarovam/php/praktika/content.php");
}



    //2query
    if(isset($_POST['registr'])){
    $sql = "INSERT INTO `users`
    (`login`, `password`, `email`)
    VALUES (
        '".$_POST['login']."', 
        PASSWORD('".$_POST['password']."'),
        '".$_POST['email']."'

        )";
        // var_dump($sql);
        $result = mysqli_query($mysqli, $sql); 
        if (mysqli_errno($mysqli)) echo mysqli_errno();
    header("Location:http://localhost/kaynarovam/php/praktika/login.php");
}




//3query
if(isset($_POST['login'])){
    $sql = "SELECT * FROM `users` WHERE `login`='".$_POST['login']."' AND `password`=PASSWORD('".$_POST['password']."')";
        // var_dump($sql);
    $result = mysqli_query($mysqli, $sql); 
    if (mysqli_errno($mysqli)) echo mysqli_errno();
    $row = mysqli_fetch_assoc($result);
    if($row > 0){
        $_SESSION['user_id'] =$row['id'];
        $_SESSION['role'] = $row['role'];
        header("Location://localhost/kaynarovam/php/praktika/content.php");
    }else{
        header("Location://localhost/kaynarovam/php/praktika/login.php");
    }
}

if(isset($_POST['update'])){
     $sql="UPDATE `friends` SET 
         `first name`='".$_POST['firstname']."',
          `phone`='".$_POST['phone']."',
           `email`='".$_POST['email']."',
            `adres`='".$_POST['adres']."',
             `name`='".$_POST['name']."',
              `last name`='".$_POST['lastname']."'
               WHERE `id`='".$_POST['id']."'";
             // var_dump($sql);
              mysqli_query($mysqli,$sql);
              if (mysqli_errno($mysqli))echo mysqli_errno();
            //   header("Location:http//kaynarovam/php/praktika/card.php?id=".$_POST['id']);
              header("Location:card.php?id=".$_POST['id']);
}

if (isset($_GET['id'])){
    $sql = "DELETE FROM `friends` WHERE `id`=".$_GET['id'];
    //var_dump($sql);
    mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli))echo mysqli_errno();
    header("Location:http://localhost/kaynarovam/php/praktika/content.php");
}



if (isset($_GET['role'])){
    $sql = "UPDATE `users` SET `role`='reader' WHERE `id`=".$_GET['role'];
    //var_dump($sql);
    mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli))echo mysqli_errno();
    header("Location:http://localhost/kaynarovam/php/praktika/admin.php");
}




?>


