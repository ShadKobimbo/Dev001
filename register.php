<?php
session_start();

//connecting to database
include 'dbconnect.php';

//declaring of variables
$email=$_POST['email'];
$passwrd=$_POST['passwrd'];

//database query
$sql="INSERT INTO users(email, passwrd) VALUES ('$email', '$passwrd')";
$result=mysqli_query($conn,$sql);

//header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="header">
		<a href="/">Hello</a>
	</div>


	<h1>Register</h1>
	<span>or <a href="index.php">login here</a></span>

	<form action="register.php" method="POST">
		
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="passwrd">
		<input type="password" placeholder="confirm password" name="confirm_password">
		<input type="submit">

	</form>

</body>
</html>