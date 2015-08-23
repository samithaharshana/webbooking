<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'hms');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/* 
$ID = $_POST['user1'];
$Password = $_POST['pass1'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['user1']))   //checking the 'user1' name which is from SignIn.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM reg where UserName = '$_POST[user1]' AND Password = '$_POST[pass1]'") or die(    mysql_error());//
	$row = mysql_fetch_array($query) or die(mysql_error());
	
	//($row['UserName']==$_POST['user1'] && $row['Password']==$_POST['pass1'])
	
	if(!empty($row['UserName']) AND !empty($row['Password']))// check the emptyness
	{
		$_SESSION['UserName'] = $row['Password'];
		header("Location: index.html");
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else 
	{
		echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit1']))
{
	SignIn();
}

?>


