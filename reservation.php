<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>

		
<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">	
	
		
		
		
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


<style type="text/css">
<!--
a img {border: none; }
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #006600;
	font-style:italic;
	text-decoration: none;
}
a:active {
	color: #006600;
	text-decoration: none;
}
.style1 {color: #000000}
-->
</style>


	</head>


	<!-- include input widgets; this is independent of Datepair.js -->


	
	<body>
		<div id="content"> 

			<div id="header-block">
				<!-- HEADER BLOCK -->
				<!-- BACKGROUND AND HEADER -->
				<div id="bg-brand" class="embrace cs-Gray" style="z-index: -100">
					<div class="container">
						<div class="hotel-banner">
							<div id="img_placeholder" class="hotel-logo-text">
								<h1 class="hotel-head-name">
									<a href="index.html">Hotel Matara</a>
								</h1>
							</div>
							<a href="index.html">
								<img id="logoheader_image" src="images/matarahotel.jpg" alt="Hotel Matara" style="display:none" class="stretch"/>
							</a>
						</div>
					</div>
				</div>
				
				
				<script>
    var logoheader_img = document.getElementById("logoheader_image");
    function showLogoHeaderImage()
    {
        logoheader_img.style.display = "block";
        document.getElementById("img_placeholder").style.display = "none";
    };
    if(logoheader_img)
    {
        logoheader_img.onload = showLogoHeaderImage;
    }
    window.onload = function()
    {
       if(logoheader_img && logoheader_img.height>0) 
           showLogoHeaderImage();
    };
				</script>
				
				
			</div>



			<div class="container container-nudgeup">

				<div class="progress-bar-block clearfix">
					<!-- PROGRESS BAR START -->
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
					<!-- PROGRESS BAR END -->
					
					<div class="side-progress-bar-first pull-right">
						<!-- BOOKMARK BUTTON START -->
						<a href="javascript:void(0)" id="bookmark" class="btn btn-mini bkmark translate" rel="sidebar" style="color: black !important;">Bookmark</a>
						<!-- BOOKMARK BUTTON END -->

						<!-- INSERT TRANSLATION WIDGET HERE -->
						<!-- END TRANSLATION WIDGET END -->
					</div>
				</div>

				<div id="cookie_error" class="alert alert-error" style="display:none;">
					<span class="translate">Cookies are not enabled on your browser. Please adjust your browser settings before continuing, and refresh the page.</span>
				</div>

				<!-- TRANSLATION DISCLAIMER -->
				<div id="langblurb" class="translate-disclaimer clearfix" style="margin-bottom: 20px;">
					<span class="disclaimer">
						<strong class="translate">Disclaimer:</strong>
						<span class="translate">This page has been translated from English, the official language, using Google Translate.</span>
					</span>
				</div>            

<!--   
Click your arrival and departure dates on the calendar.
-->


				<div class="row" style="margin-top: 0px">
					<div class="span12 selectDates-block">
						<h3 class="selectDates-title">
							<span class="translate">Click your</span>
							<strong class="translate">arrival</strong>
							<span class="translate">and</span>
							<strong class="translate">departure</strong>
							<span class="translate">dates on the calendar.</span>
						</h3>
					</div>

					<!--   Date picker-->
<div class="mainwrapper">

  
  
  <div class="rightother">
  
  <div class="reservation">
	  <div align="center" style="padding-top: 7px; font-size:30px;"><strong>RESERVATION</strong></div></br>
	<div style="margin-top: 14px;">
	<form method="post" action="selectroom.php" name="index" onsubmit="return validateForm()">
  
      <label style="margin-left: 0px;">Arrival Date : </label>
     <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly /></input>

	 <span>  </span>
     
	 <label style="margin-left: 0px;">Daparture Date : </label>
      <input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="end" id="ed" value="" maxlength="10" readonly />
	  <BR />
	  <label style="margin-left: 0px;">Adult : </label>
	  <select name="adult" class="ed1" >
	    <option>1</option>
	    <option>2</option>
	    <option>3</option>
	  </select>
	  <BR />
	  <label style="margin-left: 0px;">Child : </label>
	  <select name="child" class="ed1">
	    <option>0</option>
	    <option>1</option>
	    <option>2</option>
	  </select>
	  <BR />
	  </br>
	 
						<div class="pull-right" style="float:right !important;display:block;margin: 10px 0 20px 20px;">
							<button id="btnNext" class="btn btn-primary btn-large translate enable" style="font-size: 18px;float:right;">View rooms and prices &raquo;</button>
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
  
  	
	<style>
a {
    color: #FF0000;
}
</style>
  	<br></br>
    <div align="center"><br />
	</br></br>

      <a rel="facebox" href="modifyindex.php" style=" font-size:20px;font-color:red;">Modify</a> / <a href="cancelindex.php" style=" font-size:20px; font-color:red;">Cancel</a><font size="4"> Reservation </font>  </div>
	</div>
	
	
	</div>
	
 </div>
  
    
</div>					
					
					
					<div class="span8 offset2" style="z-index: 1000;">
						<div id="datepicker" style="width: 100%; border: none;">
						</div>
					</div>

					<div class="clearfix span8 offset2">

						<d	iv class="pull-left translate flexi-line">
							<span class="translate">Are your dates flexible? </span><a href="#" id="flexible" style="white-space: nowrap;">
								<strong class="translate">Click here to see promotions.</strong>
							</a>
						</div>



					</div>
				</div>
				<!-- CLOSE ROW -->
			</div>
			<!-- CLOSE CONTAINER -->

		</div>

 
 
		

	</body>





</html>