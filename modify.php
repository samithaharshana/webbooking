

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>
	<meta charset=utf-8 />
	
			<!-- Latest compiled and minified CSS  bootstrap-->
			<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">
			
			  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
.top{
	width:1200px;
	height:400px;
	padding-left:450px;
	padding-top:120px;
	padding-right:300px;
	
	
}

.btnsubmit{
	
	padding-top:20px;	
padding-left:100px;	
}
.form-horizontal{
	padding-right:10px;
}
.back{
	
	padding-left:20px;
	padding-top:20px;
}


  		</style>
		
		
		<script type="text/javascript">
		
						
				
function validateForm()


{
var x=document.forms["index"]["tid"].value;
if (x==null || x=="")
  {
  alert("you must enter your TransactionID");
  return false;
  }
}
		</script>
				</head>



<body background="images/background.jpg">
							
<div class="header">
			<a href="index.php">
				<img id="logoheader_image" src="images/matarahotel1.jpg" alt="Hotel Matara" class="stretch"/>
			</a>
		</div>

<div class="back">
<a href="homelogout.php">Back</a>
</div>




<div class="top">
		
		<div class="panel  panel-primary">
   <div class="panel-body panel-heading">
       <strong>Modify Your Reservation </strong>
   </div>
   <div class="panel-footer">
   <form  method="post" action="modifysubmit.php" name="index" onsubmit="return validateForm()">
  <div class="form-horizontal">
    <div class="control-group row-fluid form-inline">
        <label for="name" class="control-label"><p class="text-info">Transaction ID&nbsp;<i class="icon-star"></i></p></label>
        <div class="controls">
            <input type="text" name="tid" id="name" placeholder="Enter your transactionID" class="span3">
        </div>
    </div>
</div>
	
			<div class="btnsubmit">
			
			<input type="submit" value="Submit">
			</div>
</form>
   
   
   
   </div>
</div>
		
		
		</div>
				

</body>


</html>