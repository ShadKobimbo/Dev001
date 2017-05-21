<?php
session_start();
$output=NULL;

if(isset($_POST['submit'])){

//connecting to database
include 'dbconnect.php';

//variable
$search=$_POST['search'];

//database query
$resultSet=$conn->query("SELECT * FROM debtstatus WHERE phone_number = '$search' ");

if($resultSet->num_rows > 0){
    while($rows=$resultSet->fetch_assoc())
        {
                $first_name= $rows['First_name'];
                $second_name= $rows['second_name'];
                $debt = $rows['debt_status'];

                $output="Names: $first_name $second_name <br/> Debt Status: $debt";
        }
}else{
    $output =  "No Result";
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
        <a href="home.php">Home</a>&nbsp&nbsp&nbsp&nbsp
		<a href="debtorslist.php">View Debtors</a>&nbsp&nbsp&nbsp&nbsp
        <a href="customers.php">Search For Customers</a>&nbsp&nbsp&nbsp&nbsp
        <a href="index.php">Logout</a>&nbsp&nbsp&nbsp&nbsp
	</div>

	<h1>Search using Mobile Number</h1>
	
	<form action="mobile.php"  method="POST">
		
		<input type="text" placeholder="Enter the Mobile number" name="search">
		<input type="submit" name="submit" value="Search">
        <p><a href="idnum.php">Use ID Number</a></p>
	</form>
<?php
echo "$output";
?>
</body>
</html>