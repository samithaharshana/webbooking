<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>MATARA Beach Hotel Sri Lanka | Online Reservation System</title>
	
	
	
	<link rel="stylesheet" type="text/css" href="http://cdn.directwithhotels.com/8.0/desktop/css/gi-all-min-cb20150813.css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />


<style>			
.nav{
	padding-left:60px;
	
}

.header {
	background-color:#610B0B;
    color:black;
    width:1356px;
    padding:5px;	 
}
.main{
	width:1200px;
	height:300px;
	margin: 50px 20px 20px 40px;
	 display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
	
}
.main1{
	width:600px;
	height:300px;
	margin: 10px 10px 10px 10px;
	
	 -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    
    padding: 1em;

	
}


#rcorners2 {
    border-radius: 55px;
    
      
}




</style>
</head>


<body background="images/background.jpg">


<?php  session_start();?>

<div class="header">
			<a href="index.html">
				<img id="logoheader_image" src="images/matarahotel1.jpg" alt="Hotel Matara" class="stretch"/>
			</a>
		</div>
<div class="nav">

			<ul class="breadcrumb pull-left">
						<li >
							<span class="pagenum translate">1</span>
							<span class="translate"><font face="verdana">Select dates</font> &nbsp;</span>
						</li>
						<li >
							<span class="pagenum translate">2</span>
							<span class="translate"><font face="verdana">Select rooms</font>  &nbsp;</span>
						</li>    
						<li class="active">
							<span class="pagenum translate">3</span>
							<span class="translate"><font face="verdana">Confirm reservation</font>  &nbsp;</span>
						</li>
						<li >
							<span class="pagenum translate">4</span>
							<span class="translate"><font face="verdana">Guest details</font> </span>
						</li>
					</ul>
					</div>
					
					
					
					<div class="main">
						<div class="main1" class="span7">
					
	<table class="table table-condensed" id="rcorners2" style="margin-bottom: 0; padding-bottom: 0">
                            <tbody>
                                <tr>
                                    <td style="width: 30%" class="translate"><strong>Rate plan:</strong></td>
                                    <td>
                                        <span class="nudge-left" style="font-weight: bold;">
                                            <a data-toggle="modal" href="javascript:void(0);" class="rp-details" data-rate-plan-id="11746" data-payment-scheme="2" style="white-space:normal;">
                                                Rate per Night                                            </a>
                                        </span>
                                    </td>
                                    <td class="right-label" style="width: 30%">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="translate"><strong>Total number of rooms:</strong></td>
                                    <td>
                                        <span class="nudge-left">
												<?php   echo $_POST["room1"]?>

											</span>
                                    </td>
                                    <td class="right-label">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="translate"><strong>Room types:</strong></td>
                                                                        <td>
                                        <span class="nudge-left">
                                            
                                                <?php  echo $_SESSION['RoomType']?>  
                                            
                                        </span>
                                    </td>
                                    <td class="right-label">
                                        
                                                                                <span class="totalcostpernight">
                                            USD <?php echo  $_POST["room1"] * intval($_SESSION['nights']) * $_SESSION['FeePerDay'] .".00" ?>                                       </span>
                                   </td>
                                </tr>
                                <tr>
                                    <td></td>
                                
                                </tr><tr>
                                                                        <td rowspan="10" style="vertical-align: middle">
                                                                            </td> 

                                    <td><span class="nudge-left">Total Room Charges:</span></td>
                                    <td class="right-label" style="width: 30%">
								<span>USD <?php echo  $_POST["room1"] * intval($_SESSION['nights']) * $_SESSION['FeePerDay'] .".00" ?> </span>
                                    </td>
                                </tr>
                                                                                                <tr>
                                    <td>
                                        <span class="nudge-left">
                                                                                                                                    <span class="translate" data-html="true" rel="tooltip" data-original-title=" National Building Tax:  2% of total room charge Value Added Tax:  12% of total room charge"><i class="icon-question-sign"></i></span>
                                                                                        <span style="font-size: 12px;" class="translate">Taxes:</span>
                                        </span>
                                    </td>
                                    <td class="right-label" style="width: 30%; font-size: 12px;">
                                                                                <span>USD <?php
																				echo $_POST["room1"]*$_SESSION['Tax'].".00"
																				
																				?></span>
                                    </td>
                                </tr>
                                                                                                <tr>
                                    <td>
                                        <span class="nudge-left">
                                                                                        
                                            <span class="tax_tooltip translate" data-html="true" rel="tooltip" data-original-title=" Service Charge:  10% of total room charge Tourism Development Levy:  1% of total room charge"><i class="icon-question-sign"></i></span>
                                                                                        <span style="font-size: 12px;" class="translate">Fees:</span>
                                        </span>
                                    </td>
                                    <td class="right-label" style="width: 30%; font-size: 12px;">
                                                                                <span>USD <?php 
																				
																					echo $_POST["room1"]*$_SESSION['Fees'].".00"
																				
																				?></span>
                                    </td>
                                </tr>
                                                                                                <tr>
                                    <td><span class="nudge-left translate">Total Reservation Cost:</span></td>
                                    <td class="right-label" style="width: 30%;">
                                                                                <span>USD <?php
																				
										echo 	 $_POST["room1"] * intval($_SESSION['nights']) * $_SESSION['FeePerDay']+$_SESSION['Tax'] +$_SESSION['Fees'].".00"								
																				
																				
																				?></span>
                                    </td>
                                </tr>
                                                                <tr class="price-light" style="padding-top: 10px">
                                    <td><span class="nudge-left translate">PAYABLE AT THE HOTEL:</span></td>
                                    <td class="right-label" style="width: 30%">
                                                                                USD <?php
																				echo 	 $_POST["room1"] * intval($_SESSION['nights']) * $_SESSION['FeePerDay']+$_SESSION['Tax'] +$_SESSION['Fees'].".00"								
																				
																				?>                                   </td>
                                </tr>
                                                                <tr>
                                    <td style="vertical-align:top" colspan="2"><a href="javascript:void(0)" id="showdetails" style="margin-left: 7px; margin-top: 5px;" class="translate">Show details »</a></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top" colspan="2">
                                                                                <p class="pull-right" style="text-align: center; margin-top: 8px;">
												<a href="guestdetails.php" id="btnguestdetails" class="btn btn-large btn-primary translate" style="width: 140px; font-size: 19px;">Guest details »</a>
                                        </p>
                                                                            </td>
                                </tr>
                            </tbody>
                        </table>
					</div>
					
					
					<div class="main1" class="span5">
					
                    <div id="details-reserve" style="background: none repeat scroll 0 0 transparent !important; border: medium none; border-radius: 5px 5px 5px 5px;">
                        <h3>Arrival &amp; Departure Details</h3>
                        <table class="table table-condensed" style="margin: 0 auto; padding-bottom: 0; width: 100%">
                            <tbody>
                                <tr>
                                    <td style="width: 130px;"><strong>Arrival:</strong></td>
                                    <td><span class="nudge-left"><?php echo  $_SESSION['arrival']?></span></td>
                                    <td class="right-label">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><strong>Departure:</strong></td>
                                    <td><span class="nudge-left"><?php echo  $_SESSION['departure']?></span></td>
                                    <td class="right-label">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Number of night/s:</strong>
                                    </td>
                                    <td>
                                        <span class="nudge-left">
										<?php 
										 
										
										echo intval($_SESSION['nights']) ;
										 
										 ?>
										
										
										
										
										</span>
                                    </td>
                                    <td class="right-label">&nbsp;</td>
                                </tr>
                                                            </tbody>
                        </table>

                        <hr class="border-dot">
                        <div class="tail-text">
                            
                                                                                    
                            <p style="font-size:15px">
                                <strong>Prepayment:</strong>
                                <span>No prepayment will be charged. Payment for your stay will be made at the hotel. Please note that your credit card may be pre-authorized prior to your arrival.<br></span>
                            </p>
                            <p style="font-size:15px">
                                <strong>Modification:</strong>
                                <span>We don't charge you a modification fee if you choose to modify before 1:00PM, September 17, 2015 GMT +05:30.</span>
                            </p>
                            <p style="font-size:15px">
                                <strong>Cancellation:</strong>
                                <span>We don't charge you a cancellation fee if you choose to cancel before 1:00PM, September 08, 2015 GMT +05:30. Otherwise you will be charged 50% of the total reservation cost.<br></span>
                            </p>
                            
                            <p style="margin:25px 0 35px 0;"><strong><em>Time and date are based on hotel's timezone.</em></strong></p>
                                                    </div>

                        
                    </div>
                </div>
					
					
					
					
					
					</div>


</body>
</html>