<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
<form action="" method="post" class="login">
    <p>Login</p>
    <p><input type="text" name="username" value="" placeholder="username"></p>
    <p><input type="text" name="password" value="" placeholder="password"></p>
    <p style="font-size: medium;">No account?<a href="register.php">Create one!</a></p>
    <input type="submit" class="btn" value="login">
</form>


<?php
session_start();
require("lineMysql.php");

if(!empty($_POST['username'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = $db->selectbyUser("user", $username);     
    $rows=$db->rows($select);       
    $assoc = $db->assoc($select);   

    if(empty($rows)){
        echo "<script>alert('Invalid user！')</script>";
    }else{
        if($password==$assoc['password']){
            $_SESSION['username']=$username;
            header('Location:mainpage.php');
        }else{
            echo "<script>alert('wrong password！')</script>";
        }
    }
}
?>

</body>
</html>

