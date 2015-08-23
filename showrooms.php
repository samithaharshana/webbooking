<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>
	
	
	
	<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />



	<style>
	body{
			margin: 0px;
background-color:#A4A4A4;

		}
		
	
.header {
	background-color:#610B0B;
    color:black;
    width:1356px;
    padding:5px;	 
}

.roomdetails1{
	margin: 10px 10px 10px 10px;
	width:800px;
	height:40px;
	padding-left:20px;
	
}

.roomdetails2{
	margin: 10px 10px 10px 10px;
	width:1346px;
	height:200px;
	padding-left:20px;
	padding-top:20px;
	
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 {
	
    width:95%;    
    background-color: #f1f1c1;
}
.details{
	padding-left:10px;
	margin: 20px 650px 10px 30px;
	background-color:#81F79F;
	
}
	
.reservenow{
	padding-right:45px;
	
	
	.maindiv{
		
		background-image: url("../images/bg.png");
		
	}
	
}

table {
	


	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
	
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	-moz-border-radius-bottomleft:9px;
	-webkit-border-bottom-left-radius:9px;
	border-bottom-left-radius:9px;
	-moz-border-radius-bottomright:9px;
	-webkit-border-bottom-right-radius:9px;
	border-bottom-right-radius:9px;
	-moz-border-radius-topright:9px;
	-webkit-border-top-right-radius:9px;
	border-top-right-radius:9px;
	-moz-border-radius-topleft:9px;
	-webkit-border-top-left-radius:9px;
	border-top-left-radius:9px;
}
	</style>
	

	</head>
	
	<body background="images/background.jpg">
	
	<div class="header">
			<a href="index.html">
				<img id="logoheader_image" src="images/matarahotel1.jpg" alt="Hotel Matara" class="stretch"/>
			</a>
		</div>
		
		<div class="maindiv">
		
		<div class="roomdetails1">
		
		<ul class="breadcrumb pull-left">
						<li >
							<span class="pagenum translate">1</span>
							<span class="translate"><font face="verdana">Select dates</font> &nbsp;</span>
						</li>
						<li class="active">
							<span class="pagenum translate">2</span>
							<span class="translate"><font face="verdana">Select rooms</font>  &nbsp;</span>
						</li>    
						<li >
							<span class="pagenum translate">3</span>
							<span class="translate"><font face="verdana">Confirm reservation</font>  &nbsp;</span>
						</li>
						<li >
							<span class="pagenum translate">4</span>
							<span class="translate"><font face="verdana">Guest details</font> </span>
						</li>
					</ul>
		
		</div>
		
		
		
		
		<div class="reservenow">
		
      
		
		
		</div>
		
        </div>
		
		
		<div class="details" >
		
		
			<Strong>Arrival Date</Strong>:  <?php echo $_POST["start"]; ?>&nbsp;
			
            <Strong>Departure Date:</Strong>  <?php echo $_POST["end"]; ?> &nbsp;
			
			
			
			<?php
			$date1= str_replace("/","-",$_POST["start"]);
			$date2= str_replace("/","-",$_POST["end"]);
			
			
$datetime1 = date_create($date1);
$datetime2 = date_create($date2);
$interval = date_diff($datetime1, $datetime2);

$diff= $interval->format('%R%a days');


session_start();
$_SESSION['arrival'] =$_POST["start"];
 $_SESSION['departure'] =$_POST["end"];
$_SESSION['nights'] = $diff;


			?>
			<Strong>Nights:</Strong>  <?php   echo $diff?>
			<Strong><a href="reserve.php">Change dates</a></Strong> 
		  
		</div>
		
		
		<div class="roomdetails2">
		
		

<table id="t01" class="table table-bordered table-striped" data-rateplan-id="11746" CELLPADDING=8 CELLSPACING=0 BACKGROUND="images/background.jpg">
  <tr>
    <th>
	
	Available Rooms</th>
    <th>Adults</th>			
    <th>Children</th>
	<th>Price Per Night</th>
	<th>Total Cost per Room</th>
	<th>No of Rooms</th>
  </tr>	
  <tr id="1">
    <td>
	<img src="images/p1.jpg" class="thumbnail pull-left"  height="50" width="50" >
	Deluxe Rooms</td>
    <td>up to 2</td>		
    <td>up to 2</td>
	<td>USD 1500</td>
	<td>
	<?php
	echo "USD 	" . 1500*$diff;
	?>
	</td>
	<td>
	
	<form method="post" action="confirm.php" name="index1" >
<select id="name1" name="room1">
 <option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
<button  class="btn btn-primary"  	id="jsbutton" disabled />reserve now</button> 
<?php
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

$sql = "SELECT RoomType,FeePerDay,Tax,Fees FROM roominfo where RoomType='Deluxe Rooms'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $type_1= $row["RoomType"];
		$type_2= $row["FeePerDay"];
		$tax= $row["Tax"];
		$fees= $row["Fees"];
			
		$_SESSION['RoomType'] = $type_1;
		$_SESSION['FeePerDay'] = $type_2;
		$_SESSION['Tax'] = $tax;
		$_SESSION['Fees'] = $fees;
		
		
		
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

  </form>
	
	
</td>
  </tr>
  <tr>
    <td><img src="images/p2.jpg" class="thumbnail pull-left"  height="50" width="50" >Luxury Panoramic Rooms</td>
    <td>Up to 2</td>		
    <td>Up to 2</td>
	<td>USD 3000</td>
	<td><?php
	echo "USD 	" . 3000*$diff;
	?></td>
	<td>
		
<select id="name2">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton1" disabled />reserve now</button> 
	</td>
  </tr>
  <tr>
    <td><img src="images/p3.jpg" class="thumbnail pull-left"  height="50" width="50" >Luxury Rooms</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 2500</td>
	<td><?php
	echo "USD 	" . 2500*$diff;
	?></td>
	<td>
		
<select id="name3">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton3" disabled />reserve now</button> 
	</td>	
  </tr>
  
  
   <tr>
    <td><img src="images/p4.jpg" class="thumbnail pull-left"  height="50" width="50" >Luxury Suites</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 6000</td>
	<td><?php
	echo "USD 	" . 6000*$diff;
	?></td>
	<td>
		
<select id="name4">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton4" disabled />reserve now</button> 
	</td>	
  </tr>
   <tr>
    <td><img src="images/p5.jpg" class="thumbnail pull-left"  height="50" width="50" > Panoramic Rooms</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 2000</td>
	<td><?php
	echo "USD 	" . 2000*$diff;
	?></td>
	<td>
		
<select id="name9">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton9" disabled />reserve now</button> 
	</td>	
  </tr>
   <tr>
    <td><img src="images/p6.jpg" class="thumbnail pull-left"  height="50" width="50" >Royal Suite</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 8000</td>
	<td><?php
	echo "USD 	" . 8000*$diff;
	?></td>
	<td>
		
<select id="name5">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton5" disabled />reserve now</button> 
	</td>	
  </tr>
   <tr>
    <td><img src="images/p7.jpg" class="thumbnail pull-left"  height="50" width="50" >Standard Room</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 2900</td>
	<td><?php
	echo "USD 	" . 2900*$diff;
	?></td>
	<td>
		
<select id="name6">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton6" disabled />reserve now</button> 
	</td>	
  </tr>
   <tr>
    <td><img src="images/p8.jpg" class="thumbnail pull-left"  height="50" width="50" > Suites</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 1000</td>
	<td><?php
	echo "USD 	" . 1000*$diff;
	?></td>
	<td>
		
<select id="name7">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton7" disabled />reserve now</button> 
	</td>	
  </tr>
   <tr>
    <td><img src="images/p9.jpg" class="thumbnail pull-left"  height="50" width="50" >Superior Rooms</td>
    <td>Up to2</td>		
    <td>Up to2</td>
	<td>USD 4000</td>
	<td><?php
	echo "USD 	" . 4000*$diff;
	?></td>
	<td>
		
<select id="name8">
<option value="0"> </option>
 <option value="1">1</option>
                                                                                                                                <option value="2">2</option>
                                                                                                                                <option value="3">3</option>
                                                                                                                                <option value="4">4</option>
                                                                                                                                <option value="5">5</option>
                                                                                                                                <option value="6">6</option>
                                                                                                                                <option value="7">7</option>
                                                                                                                                <option value="8">8</option>
                                                                                                                                <option value="9">9</option>
                                                                                                                                <option value="10">10</option>
                                                                                                                                <option value="11">11</option>
                                                                                                                                <option value="12">12</option>
                                                                                                                                <option value="13">13</option>
                                                                                                                                <option value="14">14</option>
                                                                                                                                <option value="15">15</option>
                                                                                                                                <option value="16">16</option>
                                                                                                                                <option value="17">17</option>
                                                                                                                                <option value="18">18</option>
                                                                                                                                <option value="19">19</option>
                                                                                                                                <option value="20">20</option>
                                                                                                                            </select>
																															<button type="button" class="btn btn-primary"  	id="jsbutton8" disabled />reserve now</button> 
	</td>	
  </tr>
  
</table>
		
		</div>
		
		
		
		
		</div>
		
	
<!--  js to enable buttons-->
		
		 <script>


    $('#name1').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton').prop('disabled', false);
        }
    });


</script>
		
				
		 <script>


    $('#name2').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton1').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton1').prop('disabled', false);
        }
    });


</script>
		
	 <script>


    $('#name3').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton3').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton3').prop('disabled', false);
        }
    });


</script>
	 <script>


    $('#name4').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton4').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton4').prop('disabled', false);
        }
    });


</script>
		
		
			 <script>


    $('#name5').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton5').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton5').prop('disabled', false);
        }
    });


</script>
	 <script>


    $('#name6').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton6').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton6').prop('disabled', false);
        }
    });


</script>
			 <script>


    $('#name7').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton7').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton7').prop('disabled', false);
        }
    });


</script>
	 <script>


    $('#name8').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton8').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton8').prop('disabled', false);
        }
    });


</script>
			 <script>


    $('#name9').change(function(e) {
      if ($(this).prop("selectedIndex") === 0)
        {
            $('#jsbutton9').prop('disabled', true);  
        }
        else
        {
            $('#jsbutton9').prop('disabled', false);
        }
    });


</script>
			
		
		
		
		
		
	
	</body>
	
	
	
	</html>