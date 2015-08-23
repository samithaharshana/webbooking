<?php
$username = "username";
$password = "password";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("hms",$dbhandle)
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT username, password FROM login");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "User ID:".$row{'username'}." Password:".$row{'password'}."<br>";//display the results
   
}
//close the connection
mysql_close($dbhandle);
?>