<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
<form action="" method="post">
    <p>username: <input type="text" name="username" value=""></p>
    <p>email: <input type="text" name="email" value=""></p>
    <p>age: <input type="text" name="age" value=""></p>
    <p>phone: <input type="text" name="phone" value=""></p>
    <p>password<input type="text" name="password1" value=""></p>
    <p>Confirm Password: <input type="text" name="password2" value=""></p>
    <input type="submit"  value="register" class="btn">
</form>
</div>
<?php
session_start();
require("lineMysql.php");

if(!empty($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];

    $select = $db->selectbyUser("user", $username);
    $rows=$db->rows($select);       #The total number of result set records returned
    if(empty($rows)){
        if(!empty($_POST['password1'])){
            if($_POST['password1'] != $_POST['password2']){
                echo "<script>alert('The two passwords are different！')</script>";
            }else{
                $db->insert("user","$username","$password","$email","$age","$phone");
                header('Location:registerSuccess.php');
            }
        }else{
            echo "<script>alert('Please enter the password！')</script>";
        }
    }else{
        echo "<script>alert('this username has been registered！')</script>";
    }
}
?>

</body>
</html>