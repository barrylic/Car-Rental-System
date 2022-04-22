<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main page</title>
    <link rel="stylesheet" href="mainpage.css">
    <style>
body{
            background-color: #EEE;
            font-family: sans-serif;
            font-size: 20px;
            padding: 25px;
            margin: 0;
            overflow: auto;
        }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<?php 
if (isset($_SESSION['username'])) {
    echo 'Welcome, '.$_SESSION["username"];
}
?>
<br>
<a href="login.php"><input type="button" value="sign out"></a> <a href="shopcar.php"><input type="button" value="My shop car"></a>

<div>
<h1>Rental cars</h1>
<ul>
<li><a href="#summary">Summery</a></li>
<li><a aria-current="true" href="#stf">Enjoy</a></li>
<li><a href="#Thecars">The cars</a></li>
<li><a href="./Profile.php">Profile</a></li>
</ul>
<div id="summary">
 <h1>Summary</h1>
 <p><a href="Summary.html">Click me!</a></p></div>
<br></br>
<br></br>
<br></br>
<div id="stf">
<h1>Enjoy</h1>
<p>We wish you the best experience possible.</p>
<br></br>
<br></br>
<br></br>
<h1>Cars</h1>
</div>
<div id="Thecars" class="cars">
    <form action="./order1.php" method="post">
<div class="suv1"><img src="./Compact.jpg" alt="compact" width="700px" height="400px"> 
<br></br>
<input type="submit" value="Order" ></div></form>
<form action="./order2.php" method="post">
<div class="suv2">  <img src="./Midsize.jpg" alt="mid"width="700px" height="400px" >
<br></br>
<input type="submit" value="Order" >
</div>
</form>
<form action="./order3.php" method="post">
<div class="suv3"><img src="./Luxury.jpg" alt="lux" width="700px" height="400px"> 
<br></br>
<input type="submit" value="Order" >
</div>
</form>
<form action="./order4.php" method="post">
<div class="suv4"><img src="./700.jpg" alt="700" width="700px" height="400px">
<br></br>
<input type="submit" value="Order" >
</div>
</form>
        </div>
        </div>
</body>
</html>