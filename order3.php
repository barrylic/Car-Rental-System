<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compact</title>
    <link rel="stylesheet" href="./orders.css">
</head>
<body>
    <div class="main"><img src="./Luxury.jpg" alt="Compact" width="700px" height="400px">
    <form action="orderconf3.php" method="post">
		<h3>Order car</h3>
		<p>color: <input name="color" type="text" placeholder="yellow, slive"></p>
		<p>time: <input name="time" type="text" placeholder="X day"></p>
        <P>Type: <input name="type" type="text" placeholder="BMW, Cadillacs,Audi "></P>
		<input type="submit"  value="Order!">
		<a href="./mainpage.php"><input type="button" value="back to main"></a>
		</form>
    </div>
</body>
</html>