<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'hms');
define('DB_USER','root');
define('DB_PASSWORD','');

//create a database connection

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

// check the connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
   //echo “Successfully connected to your database”;
}


function NewUser()
{
	// geting user inputs to variables
	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());// run the query and insert data in tha database
	if($data)
	{
	//echo "YOUR REGISTRATION IS COMPLETED...";
	
	//Check whether the query was successful or not
	if($data) {
		header("location: login.php");
	}else {
		die("Query failed");
	}
	}
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); // checking the database value and user entered are equal

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}



?>

