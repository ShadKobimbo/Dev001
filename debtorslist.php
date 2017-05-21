<?php
    //starting a session
session_start();

//result variable
$output=NULL;

//connecting to database
include 'dbconnect.php';

//quering the database
$debtlist=$conn->query("SELECT * FROM debtors ");

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
        <a href="home.php">Home</a>&nbsp&nbsp&nbsp&nbsp
		<a href="debtorslist.php">View Debtors</a>&nbsp&nbsp&nbsp&nbsp
        <a href="customers.php">Search For Customers</a>&nbsp&nbsp&nbsp&nbsp
        <a href="index.php">Logout</a>&nbsp&nbsp&nbsp&nbsp
	</div>

	<h1>Welcome</h1>
    <h2>List of Debtors</h2>
	
   
	<?php
     //fetching data from the database
    if($debtlist->num_rows != 0){
    while($rows=$debtlist->fetch_assoc())
        {
                //creating variables for the table rows
                $first_name= $rows['first_name'];
                $second_name= $rows['second_name'];
                $status = $rows['status'];
 
                //Displaying the data in the variables
                echo "Names: $first_name $second_name <br/> Status: $status<br/><br/>";
        }
}else{
    $output =  "No Result";
}
    ?>
</body>
</html>