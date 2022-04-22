<?php
session_start();
?>
<!doctype html>
<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Order Confirm</title>
    <link rel="stylesheet" href="pro.css">
</head>

<body>
	<div class="main">
<?php
$servername = "localhost";
$username = "zsun5";
$password = "zsun5";
$dbname = "zsun5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_SESSION['username'];
$color=$_POST["color"];
$time=$_POST["time"];
$type=$_POST["type"];
$price=1000;

$sql = "INSERT INTO cars
VALUES ('$user','$color','$time','$type','$price')";

if ($conn->query($sql) === TRUE) {
    echo "New order successfully saved";
} else {
    echo "Error: New order failed to be saved";
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
} 
$conn->close();
?>
<p>Go check out! <a href="shopcar.php"><input type="button" value="Shopcar"></a></p>
	<a href="./mainpage.php"><input type="button" id="btn1" value="back to main page"></a> 
	</div>
</body>

</html>