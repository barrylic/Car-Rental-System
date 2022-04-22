<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>clear shopcar</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "zsun5";
$password = "zsun5";
$dbname = "zsun5";
$user=$_SESSION['username'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection established"; 
};
$sql = "DELETE FROM cars WHERE username='$user'";
if ($conn->query($sql) === TRUE) {
    echo "You have delete you order!";
} else {
    echo "Error dropping album table: ";
};
?>
<a href="./mainpage.php"><input type="button" value="back to main page"></a>
</body>
</html>