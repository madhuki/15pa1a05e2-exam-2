<?php
include "connect.php";
    session_start();
 if(isset($_POST["sub"]) ){
	$name = $_POST["name'"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$qry = "INSERT INTO  `register` (`name`,`email`,`password`) VALUES ('$name','$email','$pass');";
	  mysqli_query($conn,$qry) or die("connection failed".mysqli_error());
	  
	}
?>
<!DOCTYOPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="index.css">
</head>
<div class=r>
<body>
<h1>Register</h1>
<form action="" method="POST">
<label>Name</label>
<input type="text" name="name"><br><br>
<label>Email</label>
<input type="text" name="email"><br><br>
<label>Password</label>
<input type="text" name="password"><br><br>
<input type="button" name="sub" value="submit"></div>

</body>
</html>
