<?php
session_start();

//result variable
$output=NULL;

if(isset($_POST['submit'])){
	//connecting to database
include 'dbconnect.php';

//assinging the contents of the search box to the variable search
$search=$_POST['search'];

//quering the database
$resultSet=$conn->query("SELECT * FROM debtstatus WHERE user_id = '$search' ");

    //fetching data from the database
if($resultSet->num_rows > 0){
    while($rows=$resultSet->fetch_assoc())
        {
				  //creating variables for the table rows
                $first_name= $rows['First_name'];
                $second_name= $rows['second_name'];
                $debt = $rows['debt_status'];

				  //Displaying the data in the variables
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
        <a href="login.php">Logout</a>&nbsp&nbsp&nbsp&nbsp
	</div>

	<h1>Search using ID Number</h1>
	
	<form action="idnum.php"  method="POST">
		
		<input type="text" placeholder="Enter the ID number" name="search">
		<input type="submit" name="submit" value="Search">
        <p><a href="mobile.php">Use Mobile Number</a></p>
	</form>
<?php
echo "$output";
?>
</body>
</html>