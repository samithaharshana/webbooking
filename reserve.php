<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>

		<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">
		<style>
		body{
			margin: 0px;

		}


		header {

	background-color:#610B0B;
    color:black;
    width:1356px;
    padding:5px;	 
}

.nav{
	
	padding-left:100px;
	width:1166px;
	height:60px;
	padding-right:100px;
	

	
	

}

.arrival{
	width:400px;
	height:400px;
	padding-left:100px;
	
}	


		</style>
		
				
<link href="src/main.css" rel="stylesheet" type="text/css" />

	
<!--sa calendar-->
<script type="text/javascript" src="src/datepicker.js"></script>

        <link href="src/demo.css"       rel="stylesheet" type="text/css" />
        <link href="src/datepicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
//<![CDATA[

/*
        A "Reservation Date" example using two datePickers
        --------------------------------------------------

        * Functionality

        1. When the page loads:
                - We clear the value of the two inputs (to clear any values cached by the browser)
                - We set an "onchange" event handler on the startDate input to call the setReservationDates function
        2. When a start date is selected
                - We set the low range of the endDate datePicker to be the start date the user has just selected
                - If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

        * Caveats (aren't there always)

        - This demo has been written for dates that have NOT been split across three inputs

*/

function makeTwoChars(inp) {
        return String(inp).length < 2 ? "0" + inp : inp;
}

function initialiseInputs() {
        // Clear any old values from the inputs (that might be cached by the browser after a page reload)
        document.getElementById("sd").value = "";
        document.getElementById("ed").value = "";

        // Add the onchange event handler to the start date input
        datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
}

var initAttempts = 0;

function setReservationDates(e) {
        // Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
        // until they become available (a maximum of ten times in case something has gone horribly wrong)

        try {
                var sd = datePickerController.getDatePicker("sd");
                var ed = datePickerController.getDatePicker("ed");
        } catch (err) {
                if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                return;
        }

        // Check the value of the input is a date of the correct format
        var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

        // If the input's value cannot be parsed as a valid date then return
        if(dt == 0) return;

        // At this stage we have a valid YYYYMMDD date

        // Grab the value set within the endDate input and parse it using the dateFormat method
        // N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
        var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

        // Set the low range of the second datePicker to be the date parsed from the first
        ed.setRangeLow( dt );
        
        // If theres a value already present within the end date input and it's smaller than the start date
        // then clear the end date value
        if(edv < dt) {
                document.getElementById("ed").value = "";
        }
}

function removeInputEvents() {
        // Remove the onchange event handler set within the function initialiseInputs
        datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
}

datePickerController.addEvent(window, 'load', initialiseInputs);
datePickerController.addEvent(window, 'unload', removeInputEvents);

//]]>
</script>

<!-- js for check the text filed are empty-->
	
	<script type="text/javascript">
function validateForm()
{
var x=document.forms["index"]["start"].value;
if (x==null || x=="")
  {
  alert("you must enter your check in Date(click the calendar icon)");
  return false;
  }
var y=document.forms["index"]["end"].value;
if (y==null || y=="")
  {
  alert("you must enter your check out Date(click the calendar icon)");
  return false;
  }
}
</script>

	</head>

	<body background="images/background.jpg">
		<header>
			<a href="index.html">
				<img id="logoheader_image" src="images/matarahotel1.jpg" alt="Hotel Matara" class="stretch"/>
			</a>
		</header>
		<div class="nav">

			<ul class="breadcrumb pull-left">
						<li class="active">
							<span class="pagenum translate">1</span>
							<span class="translate"><font face="verdana">Select dates</font> &nbsp;</span>
						</li>
						<li >
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
					
					
					
					
				
		<div class="arrival">
							<!--   Date picker-->


  

	  <div align="center" style="padding-top: 7px; font-size:30px;"><strong>RESERVATION</strong></div></br>
	<div style="margin-top: 14px;">
	
	<form method="post" action="showrooms.php" name="index" onsubmit="return validateForm()">
  
      <label style="margin-left: 0px;">Arrival Date : </label>
     <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly />
	 <span>  </span>
     
	 <label style="margin-left: 0px;">Daparture Date : </label>
      <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly />
	  <BR />
	  <br></br>
	  
	  
	 
						<div class="pull-right1" style="float:right !important;display:block;margin: 10px 100px 20px 20px; width:300px;">
							<button id="btnNext" class="btn btn-primary btn-large translate enable" style="font-size: 18px;float:left;">View rooms and prices &raquo;</button>
							
							
							<div id="divError" class="popover fade bottom in hide" style="position:relative;margin-top:43px;">
								<div class="arrow"/>
								<div class="popover-inner">
									<div class="popover-content translate">
    		                            Please select <strong>arrival</strong> and <strong>departure</strong> dates to proceed.
									</div>
								</div>
							</div>
						</div>
					
  </form>
  
  	

  <br></br>
  

    <div align="left"><br />


      <a rel="facebox" href="modifyindex.php" style=" font-size:20px;font-color:red;text-decoration: none;">Modify</a> / <a href="cancelindex.php" style=" font-size:20px; font-color:red;text-decoration: none;">Cancel</a><font size="4"> Reservation </font>  </div>
	</div>
	
  
  
  

		
		</div>
		
		

		</body>



	</html>