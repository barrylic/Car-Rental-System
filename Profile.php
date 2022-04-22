
<?php
session_start();
?>
<html>

<head lang="en">
	<meta charset="UTF-8">
<title>Welcome</title>
<link rel="stylesheet" href="pro.css">
</head>

<body>
	<div class="main">
	<div>
		<img src="./mcqueen.png" alt="car" width="400px" height="200px">
	</div>

<?php
$servername = "localhost";
$username = "zsun5";
$password = "zsun5";
$dbname = "zsun5";
$user=$_SESSION['username'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from user where username='$user'";
$result = $conn->query($sql);
echo "<h3>Your Profile</h3>";
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		 $username=$row["username"];
		 $password=$row["password"];
		 $email=$row["email"];
		 $age=$row["age"];
		 $phone=$row["Phone"];


         echo "<ul><li>username: ".$username."</li><li>Phone: ".$phone."</li><li>Email: ".$email."</li><li>Age: ".$age."</li></ul>";
     }
} 

$sql = "SELECT * from cars where username='$user'";
$result = $conn->query($sql);
echo "<h3>Your Order</h3>";
if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
		 $username=$row["username"];
		 $color=$row["color"];
		 $time=$row["time"];
		 $type=$row["type"];
         $price=$row["price"];
         echo "<ul><li>username: ".$username."</li><li>car color: ".$color."</li><li>Rental time: ".$time."</li><li>type: ".$type."</li><li>price: ".$price."$</li></ul>";
     }
}  else {
     echo "There is no rental car history";
}
$conn->close();
?>  

</br>
	<a href="login.php"><input type="button" id="btn1" value="Logout"></a>
	<a href="./mainpage.php"><input type="button" id="btn1" value="backe to main page"></a>
	</div>
	</div>
	</div>
</body>

</html>