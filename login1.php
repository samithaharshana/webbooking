<?php
require('sql_connect.php');
if(isset($_POST['submit1'])){
	$username=mysql_escape_string($_POST['user1']);
	$password=mysql_escape_string($_POST['pass1']);
	if(!$_POST['user1'] | !$_POST['pass1']){
		echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('You did not fill all the required fields')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
			
	}
	$sql=mysql_query("select * from reg where 'UserName'='$username' AND 'Password'='$password'" );
	//$row = mysql_fetch_array($sql) or die(mysql_error());
	if(mysql_num_rows($sql)>0){
		echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Login Successfully')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
	}else{
		echo("<SCRIPT LANGUAGE='Javascript'>
		window.alert('Woring username and password combination, ReEnter')
		window.location.href='login.html'
		</SCRIPT>");
		exit();
		
	}
	
}else{
	
	
		
}
?>