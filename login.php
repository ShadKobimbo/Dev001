<?php
session_start();

//connecting to database
include 'dbconnect.php';

//declaring variables
$email=$_POST['email'];
$passwrd=$_POST['passwrd'];

//querying database
$sql="SELECT * FROM users WHERE email='$email' AND passwrd='$passwrd'";
$result=$conn->query($sql);

//actions to be conducted based on results
if (!$row=mysqli_fetch_assoc($result)){
    echo "Wrong Username or Password";
}else{
   
    $_SESSION['id']=$row['id'];

	//redirecting to the index page
	header("Location: index.php");
    }
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<a href="/">Hello</a>
	</div>

	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>

	<form action="login.php" method="POST">
		
		<input type="text" placeholder="Enter your email" name="email">
		<input type="password" placeholder="and password" name="passwrd">

		<input type="submit">

	</form>

    <?php
        if(isset($_SESSION['id'])) {
            echo $_SESSION['id'];
}
?>
</body>
</html>