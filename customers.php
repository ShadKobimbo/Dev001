<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
        <a href="index.php">Home</a>&nbsp&nbsp&nbsp&nbsp
		<a href="debtorslist.php">View Debtors</a>&nbsp&nbsp&nbsp&nbsp
        <a href="customers.php">Search For Customers</a>&nbsp&nbsp&nbsp&nbsp
        <a href="index.php">Logout</a>&nbsp&nbsp&nbsp&nbsp
	</div>

	<h1>Welcome</h1>
    <h2>Search for a Customer</h2>
	
	<form>   
        <a href="mobile.php">Mobile Number</a>
        <a href="idnum.php">ID Number</a>			    
	</form>

</body>
</html>