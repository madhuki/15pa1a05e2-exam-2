<?php
include "connect.php";
    session_start();
 if(isset($_POST["sub"]) ){
	$name = $_POST["name'"];
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$qry = "INSERT INTO  `login` (`name`,`email`,`password`)  VALUES('$name','$email','$pass');";
	  mysqli_query($conn,$qry);
	}
?>
<!DOCTYOPE html>
<html>
<head>
<title>login</title>
<link rel="stylesheet" href="index.css">
</head>
<body>
<div class="i">
<h1>login</h1>
<form action="" method="POST">
<label>Name</label>
<input type="text" name="username"><br><br>
<label>Email</label>
<input type="text" name="email"><br><br>
<label>Password</label>
<input type="text" name="password"><br><br>
<input type="button" name="sub" value="submit">
</div>
</body>
</html>
