

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
				
				SUCCESSFULLY MODIFIED
				
				
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
echo $_SESSION['temp'];
	$country = $_POST["country"];
	//expire date
	$new="$_POST[expiremonth]". "M". "$_POST[expireyear]"."Y";
	
	
$sql="UPDATE reserveguest
SET UserName='".$_SESSION['user']."',FirstName='$_POST[fname]', LastName='$_POST[lname]', Email='$_POST[email]',Country= '$country',Mobile='$_POST[mobile]',NoOfAdults='$_POST[adults]',NoOfChildren='$_POST[child]',ArrivalDate='".$_SESSION['arrival']."',DepartureDate='".$_SESSION['departure']."',ArrivalTime='$_POST[time]',SpecialRequest='$_POST[specialrequest]',CardType='$_POST[cardtype]',CardNumber='$_POST[number]',CardOwnerIsGuest='$_POST[isowner]',CardOwner='$_POST[guestname]',ExpireDate='$new',SecurityCode='$_POST[code]' WHERE TemporaryID='".$_SESSION['temp']."' and UserName = '".$_SESSION['user']."'";



if ($conn->query($sql) === TRUE) {
    echo "Your reservation modified successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();




?> 	


				</body>
				
				</html>
				
				
				