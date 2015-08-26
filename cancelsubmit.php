

<script type="text/javascript">

   function showMessage()
   {
       //alert("you successfully cancel your reservation");
	  // window.location = 'homelogout.php';
	  
	  var answer=confirm("Are You sure,Do u want to continue?");
	  if(answer) {
		  alert("you successfully cancel your reservation");
          window.location.href = "homelogout.php"
}else{
	window.location.href = "homelogout.php"	
	
	
	
}
   }
   
    function showMessage1()
   {
       //alert("you successfully cancel your reservation");
	  // window.location = 'homelogout.php';
		
	 
	alert("You entered Transaction ID is Incorrect.\n Please Double Check");
    window.location.href = "cancel.php"

   }
   </script>
<?php  
session_start();
include_once 'dbconnect.php';


//cheking the existence entered Transaction ID is valid or available under this username.
$temp=$_POST['tid'];

$res1=mysql_query("select * from reserveguest where UserName = '".$_SESSION['user']."' and TemporaryID='$temp'") or die(mysql_error());



	if(mysql_num_rows($res1)== 0){
		
		//echo "You Entered TransactionID is Invald Under Your UserName";
		echo '<script> showMessage1(); </script>';
	}else{
		
		
		while($row = mysql_fetch_array($res1)) {
		

$res1=mysql_query("delete from reserveguest where UserName = '".$_SESSION['user']."' and TemporaryID = '$temp'") or die(mysql_error());	

   // echo  "<br> This is valid TransactionID under &nbsp".$_SESSION['user']."<br>Transaction ID is".$row['TemporaryID'] ;
	 
	echo '<script> showMessage(); </script>';
	
	 
   }
	}
	

?>



