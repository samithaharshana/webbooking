

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>
	<meta charset=utf-8 />
	
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">
			
				<style>
        #form{
            margin-top: 300px;
        }
	
		.span12{
		padding-left:50px;
			
			
		}
		.header {
	background-color:#610B0B;
    color:black;
    width:1366px;
    padding:5px;	 
}

.frame1{
 width:600px;
 padding-top:10px;
	border: 0px solid grey;
   min-height: 100%;
   height: 100%;
   display: table-cell;
   float: none;
	height:400px;
}

.main{
	width:1300px;
	height:400px;
	  border: 0px solid grey;
   display: table;
   float: none;
	
	}
	.nav{
	padding-left:80px;
	padding-bottom:50px;
}

				</style>
				</head>
				<body>
				
				SUCCESS
				
				
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$country = $_POST["country"];
	//expire date
	$new="$_POST[expiremonth]". "M". "$_POST[expireyear]"."Y";
	
$sql = "INSERT INTO reserveguest (UserName,FirstName, LastName, Email,Country,Mobile,NoOfAdults,NoOfChildren,ArrivalDate,DepartureDate,ArrivalTime,SpecialRequest,CardType,CardNumber,CardOwnerIsGuest,CardOwner,ExpireDate,SecurityCode)
VALUES ('".$_SESSION['user']."','$_POST[fname]','$_POST[lname]','$_POST[email]','$country','$_POST[mobile]','$_POST[adults]','$_POST[child]','".$_SESSION['arrival']."','".$_SESSION['departure']."','$_POST[time]','$_POST[specialrequest]','$_POST[cardtype]','$_POST[number]','$_POST[isowner]','$_POST[guestname]','$new','$_POST[code]')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();





include_once 'dbconnect.php';



$r1=mysql_query( "SELECT MAX( TemporaryID ) AS max FROM reserveguest" );

while ($row = mysql_fetch_array($r1)) {
	echo  "<br>Your Transaction ID for this transactin is&nbsp".$row['max']."<br>Please remember this for further modifications or cancelations" ;
  
}

$res1=mysql_query("select * from reserveguest where UserName = '".$_SESSION['user']."'") or die(mysql_error());


   echo "<br>Your Accont booking summary"."<br><br>";
	echo "TrsnsactionID"."&nbsp&nbsp&nbsp&nbsp "."FirstName". "&nbsp&nbsp&nbsp&nbsp"."LastName<br>";
   while ($row = mysql_fetch_array($res1)) {
	echo  $row['TemporaryID'] . "&nbsp&nbsp&nbsp&nbsp" . $row['FirstName'] . " &nbsp&nbsp&nbsp&nbsp". $row['LastName']."<br>";
  
}
mysql_close();
?> 	


				</body>
				
				</html>
				
				
				