

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
				
				
				
				<script type="text/javascript">
				
				
				
function validateForm()


{
var x=document.forms["index"]["fname"].value;
if (x==null || x=="")
  {
  alert("you must enter your First Name");
  return false;
  }
var y=document.forms["index"]["lname"].value;
if (y==null || y=="")
  {
  alert("you must enter your Last Name");
  return false;
  
  }
  var y=document.forms["index"]["email"].value;
if (y==null || y=="")
  {
  alert("you must enter your Email Address");
  return false;
  }
  
  var y=document.forms["index"]["confirmemail"].value;
if (y==null || y=="")
  {
  alert("you must confirm your Email Address");
  return false;
  }
  
    var y=document.forms["index"]["country"].value;
if (y==null || y=="")
  {
  alert("you must select your country");
  return false;
  }
  
  var y=document.forms["index"]["mobile"].value;
if (y==null || y=="")
  {
  alert("you must enter your mobile number");
  return false;
  }
   var y=document.forms["index"]["cardtype"].value;
if (y==null || y=="")
  {
  alert("you must select card type");
  return false;
  }
    var y=document.forms["index"]["number"].value;
if (y==null || y=="")
  {
  alert("you must Enter your credit card number");
  return false;
  }
  
  
    var y=document.forms["index"]["guestname"].value;
if (y==null || y=="")
  {
  alert("you must enter Card holders name");
  return false;
  }
   var y=document.forms["index"]["expiremonth"].value;
if (y==null || y=="")
  {
  alert("you must select expire month of card");
  return false;
  }
  
   var y=document.forms["index"]["expireyear"].value;
if (y==null || y=="")
  {
  alert("you must select expire year of card");
  return false;
  }
   
   
  
     var y=document.forms["index"]["code"].value;
if (y==null || y=="")
  {
  alert("you must Enter your security code");
  return false;
  }
  
       var y=document.forms["index"]["agree"].value;
if (y==null || y=="")
  {
  alert("you must agree to Terms of Reservations and Hotel policies");
  return false;
  }
  

  { var radios = document.getElementsByName("isowner");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid) alert("Answer to the question asked!");
    return formValid;
  }
       
}
</script>
			</head>


			<body background="images/background.jpg">
<?php  session_start();?>

			
<div class="header">
			<a href="index.php">
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
						<li >
							<span class="pagenum translate">3</span>
							<span class="translate"><font face="verdana">Confirm reservation</font>  &nbsp;</span>
						</li>
						<li class="active">
							<span class="pagenum translate">4</span>
							<span class="translate"><font face="verdana">Guest details</font> </span>
						</li>
					</ul>
					</div>
					

		
<div class="span12">

                    <div id="details-guest" class="clearfix">
                        <div class="row">
                           
 <form method="post" action="successdata.php" name="index" onsubmit="return validateForm()" > 
                         
                                    <div class="span6" style="border-right: 1px dotted #BFBFBF; padding-right: 25px;">                                

                                        <h3 class="translate">Guest Details</h3>
                                                                                                                                                       
										
										<!-- begin the table-->
                          <table class="table table-condensed payment" style="margin-bottom: 0; padding-bottom: 0;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <span class="translate">First Name:</span>
                                                            <input kl_virtual_keyboard_secure_input="on" name="fname" value="" id="payment_first_name" maxlength="35" type="text">
                                                            
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <span class="translate">Last Name:</span>
         <input kl_virtual_keyboard_secure_input="on" maxlength="35" name="lname" value="" id="payment_last_name" type="text">
                                                            
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>		
                                                    <td>
                                                        <label>
                                                            <span class="translate">Email Address:</span>
                                                            <input maxlength="50" oncopy="return false;" oncut="return false;" onpaste="return false;" name="email" value="" id="payment_email" type="email">
                                                            
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <span class="translate">Confirm Email Address:</span>
                                                            <input maxlength="50" oncopy="return false;" oncut="return false;" onpaste="return false;" name="confirmemail" value="" id="payment_email_confirm" type="email">
                                                            
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <span class="translate">Country of Residence:</span>
                                                            <select name="country" id="country">
                                                                <option value=""> </option>
                                                                                                                                                                                                                                                                                                                                <option value="Afghanistan">Afghanistan</option>
                                                                                                                                                                                                                                                                                                                                <option value="Albania">Albania</option>
                                                                                                                                                                                                                                                                                                                                <option value="Algeria">Algeria</option>
                                                                                                                                                                                                                                                                                                                                <option value="American Samoa">American Samoa</option>
                                                                                                                                                                                                                                                                                                                                <option value="Andorra">Andorra</option>
                                                                                                                                                                                                                                                                                                                                <option value="Angola">Angola</option>
                                                                                                                                                                                                                                                                                                                                <option value="Anguilla">Anguilla</option>
                                                                                                                                                                                                                                                                                                                                <option value="Antarctica">Antarctica</option>
                                                                                                                                                                                                                                                                                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                                                                                                                                                                                                                                                                                <option value="Argentina">Argentina</option>
                                                                                                                                                                                                                                                                                                                                <option value="Armenia">Armenia</option>
                                                                                                                                                                                                                                                                                                                                <option value="13">Aruba</option>
                                                                                                                                                                                                                                                                                                                                <option value="14">Australia</option>
                                                                                                                                                                                                                                                                                                                                <option value="15">Austria</option>
                                                                                                                                                                                                                                                                                                                                <option value="16">Azerbaijan</option>
                                                                                                                                                                                                                                                                                                                                <option value="17">Bahamas</option>
                                                                                                                                                                                                                                                                                                                                <option value="18">Bahrain</option>
                                                                                                                                                                                                                                                                                                                                <option value="19">Bangladesh</option>
                                                                                                                                                                                                                                                                                                                                <option value="20">Barbados</option>
                                                                                                                                                                                                                                                                                                                                <option value="21">Belarus</option>
                                                                                                                                                                                                                                                                                                                                <option value="22">Belgium</option>
                                                                                                                                                                                                                                                                                                                                <option value="23">Belize</option>
                                                                                                                                                                                                                                                                                                                                <option value="24">Benin</option>
                                                                                                                                                                                                                                                                                                                                <option value="25">Bermuda</option>
                                                                                                                                                                                                                                                                                                                                <option value="26">Bhutan</option>
                                                                                                                                                                                                                                                                                                                                <option value="27">Bolivia</option>
                                                                                                                                                                                                                                                                                                                                <option value="28">Bosnia and Herzegovina</option>
                                                                                                                                                                                                                                                                                                                                <option value="29">Botswana</option>
                                                                                                                                                                                                                                                                                                                                <option value="30">Bouvet Island</option>
                                                                                                                                                                                                                                                                                                                                <option value="31">Brazil</option>
                                                                                                                                                                                                                                                                                                                                <option value="32">British Indian Ocean Territory</option>
                                                                                                                                                                                                                                                                                                                                <option value="33">Brunei Darussalam</option>
                                                                                                                                                                                                                                                                                                                                <option value="34">Bulgaria</option>
                                                                                                                                                                                                                                                                                                                                <option value="35">Burkina Faso</option>
                                                                                                                                                                                                                                                                                                                                <option value="36">Burundi</option>
                                                                                                                                                                                                                                                                                                                                <option value="37">Cambodia</option>
                                                                                                                                                                                                                                                                                                                                <option value="38">Cameroon</option>
                                                                                                                                                                                                                                                                                                                                <option value="39">Canada</option>
                                                                                                                                                                                                                                                                                                                                <option value="40">Cape Verde</option>
                                                                                                                                                                                                                                                                                                                                <option value="41">Cayman Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="42">Central African Republic</option>
                                                                                                                                                                                                                                                                                                                                <option value="43">Chad</option>
                                                                                                                                                                                                                                                                                                                                <option value="44">Chile</option>
                                                                                                                                                                                                                                                                                                                                <option value="45">China</option>
                                                                                                                                                                                                                                                                                                                                <option value="46">Christmas Island</option>
                                                                                                                                                                                                                                                                                                                                <option value="47">Cocos (Keeling) Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="48">Colombia</option>
                                                                                                                                                                                                                                                                                                                                <option value="49">Comoros</option>
                                                                                                                                                                                                                                                                                                                                <option value="50">Congo</option>
                                                                                                                                                                                                                                                                                                                                <option value="51">Congo, the Democratic Republic of the</option>
                                                                                                                                                                                                                                                                                                                                <option value="52">Cook Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="53">Costa Rica</option>
                                                                                                                                                                                                                                                                                                                                <option value="55">Croatia</option>
                                                                                                                                                                                                                                                                                                                                <option value="56">Cuba</option>
                                                                                                                                                                                                                                                                                                                                <option value="57">Cyprus</option>
                                                                                                                                                                                                                                                                                                                                <option value="58">Czech Republic</option>
                                                                                                                                                                                                                                                                                                                                <option value="54">Côte d'Ivoire</option>
                                                                                                                                                                                                                                                                                                                                <option value="59">Denmark</option>
                                                                                                                                                                                                                                                                                                                                <option value="60">Djibouti</option>
                                                                                                                                                                                                                                                                                                                                <option value="61">Dominica</option>
                                                                                                                                                                                                                                                                                                                                <option value="62">Dominican Republic</option>
                                                                                                                                                                                                                                                                                                                                <option value="63">Ecuador</option>
                                                                                                                                                                                                                                                                                                                                <option value="64">Egypt</option>
                                                                                                                                                                                                                                                                                                                                <option value="65">El Salvador</option>
                                                                                                                                                                                                                                                                                                                                <option value="66">Equatorial Guinea</option>
                                                                                                                                                                                                                                                                                                                                <option value="67">Eritrea</option>
                                                                                                                                                                                                                                                                                                                                <option value="68">Estonia</option>
                                                                                                                                                                                                                                                                                                                                <option value="69">Ethiopia</option>
                                                                                                                                                                                                                                                                                                                                <option value="70">Falkland Islands (Malvinas)</option>
                                                                                                                                                                                                                                                                                                                                <option value="71">Faroe Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="72">Fiji</option>
                                                                                                                                                                                                                                                                                                                                <option value="73">Finland</option>
                                                                                                                                                                                                                                                                                                                                <option value="74">France</option>
                                                                                                                                                                                                                                                                                                                                <option value="75">French Guiana</option>
                                                                                                                                                                                                                                                                                                                                <option value="76">French Polynesia</option>
                                                                                                                                                                                                                                                                                                                                <option value="77">French Southern Territories</option>
                                                                                                                                                                                                                                                                                                                                <option value="78">Gabon</option>
                                                                                                                                                                                                                                                                                                                                <option value="79">Gambia</option>
                                                                                                                                                                                                                                                                                                                                <option value="80">Georgia</option>
                                                                                                                                                                                                                                                                                                                                <option value="81">Germany</option>
                                                                                                                                                                                                                                                                                                                                <option value="82">Ghana</option>
                                                                                                                                                                                                                                                                                                                                <option value="83">Gibraltar</option>
                                                                                                                                                                                                                                                                                                                                <option value="84">Greece</option>
                                                                                                                                                                                                                                                                                                                                <option value="85">Greenland</option>
                                                                                                                                                                                                                                                                                                                                <option value="86">Grenada</option>
                                                                                                                                                                                                                                                                                                                                <option value="87">Guadeloupe</option>
                                                                                                                                                                                                                                                                                                                                <option value="88">Guam</option>
                                                                                                                                                                                                                                                                                                                                <option value="89">Guatemala</option>
                                                                                                                                                                                                                                                                                                                                <option value="90">Guernsey</option>
                                                                                                                                                                                                                                                                                                                                <option value="91">Guinea</option>
                                                                                                                                                                                                                                                                                                                                <option value="92">Guinea-Bissau</option>
                                                                                                                                                                                                                                                                                                                                <option value="93">Guyana</option>
                                                                                                                                                                                                                                                                                                                                <option value="94">Haiti</option>
                                                                                                                                                                                                                                                                                                                                <option value="95">Heard Island and McDonald Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="96">Holy See (Vatican City State)</option>
                                                                                                                                                                                                                                                                                                                                <option value="97">Honduras</option>
                                                                                                                                                                                                                                                                                                                                <option value="98">Hong Kong</option>
                                                                                                                                                                                                                                                                                                                                <option value="99">Hungary</option>
                                                                                                                                                                                                                                                                                                                                <option value="100">Iceland</option>
                                                                                                                                                                                                                                                                                                                                <option value="101">India</option>
                                                                                                                                                                                                                                                                                                                                <option value="102">Indonesia</option>
                                                                                                                                                                                                                                                                                                                                <option value="103">Iran, Islamic Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="104">Iraq</option>
                                                                                                                                                                                                                                                                                                                                <option value="105">Ireland</option>
                                                                                                                                                                                                                                                                                                                                <option value="106">Isle of Man</option>
                                                                                                                                                                                                                                                                                                                                <option value="107">Israel</option>
                                                                                                                                                                                                                                                                                                                                <option value="108">Italy</option>
                                                                                                                                                                                                                                                                                                                                <option value="109">Jamaica</option>
                                                                                                                                                                                                                                                                                                                                <option value="110">Japan</option>
                                                                                                                                                                                                                                                                                                                                <option value="111">Jersey</option>
                                                                                                                                                                                                                                                                                                                                <option value="112">Jordan</option>
                                                                                                                                                                                                                                                                                                                                <option value="113">Kazakhstan</option>
                                                                                                                                                                                                                                                                                                                                <option value="114">Kenya</option>
                                                                                                                                                                                                                                                                                                                                <option value="115">Kiribati</option>
                                                                                                                                                                                                                                                                                                                                <option value="116">Korea, Democratic People's Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="117">Korea, Republic Of</option>
                                                                                                                                                                                                                                                                                                                                <option value="118">Kuwait</option>
                                                                                                                                                                                                                                                                                                                                <option value="119">Kyrgyzstan</option>
                                                                                                                                                                                                                                                                                                                                <option value="120">Lao People's Democratic Republic</option>
                                                                                                                                                                                                                                                                                                                                <option value="121">Latvia</option>
                                                                                                                                                                                                                                                                                                                                <option value="122">Lebanon</option>
                                                                                                                                                                                                                                                                                                                                <option value="123">Lesotho</option>
                                                                                                                                                                                                                                                                                                                                <option value="124">Liberia</option>
                                                                                                                                                                                                                                                                                                                                <option value="125">Libyan Arab Jamahiriya</option>
                                                                                                                                                                                                                                                                                                                                <option value="126">Liechtenstein</option>
                                                                                                                                                                                                                                                                                                                                <option value="127">Lithuania</option>
                                                                                                                                                                                                                                                                                                                                <option value="128">Luxembourg</option>
                                                                                                                                                                                                                                                                                                                                <option value="129">Macao</option>
                                                                                                                                                                                                                                                                                                                                <option value="130">Macedonia, the former Yugoslav Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="131">Madagascar</option>
                                                                                                                                                                                                                                                                                                                                <option value="132">Malawi</option>
                                                                                                                                                                                                                                                                                                                                <option value="133">Malaysia</option>
                                                                                                                                                                                                                                                                                                                                <option value="134">Maldives</option>
                                                                                                                                                                                                                                                                                                                                <option value="135">Mali</option>
                                                                                                                                                                                                                                                                                                                                <option value="136">Malta</option>
                                                                                                                                                                                                                                                                                                                                <option value="137">Marshall Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="138">Martinique</option>
                                                                                                                                                                                                                                                                                                                                <option value="139">Mauritania</option>
                                                                                                                                                                                                                                                                                                                                <option value="140">Mauritius</option>
                                                                                                                                                                                                                                                                                                                                <option value="141">Mayotte</option>
                                                                                                                                                                                                                                                                                                                                <option value="142">Mexico</option>
                                                                                                                                                                                                                                                                                                                                <option value="143">Micronesia, Federated States of</option>
                                                                                                                                                                                                                                                                                                                                <option value="144">Moldova, Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="145">Monaco</option>
                                                                                                                                                                                                                                                                                                                                <option value="146">Mongolia</option>
                                                                                                                                                                                                                                                                                                                                <option value="147">Montenegro</option>
                                                                                                                                                                                                                                                                                                                                <option value="148">Montserrat</option>
                                                                                                                                                                                                                                                                                                                                <option value="149">Morocco</option>
                                                                                                                                                                                                                                                                                                                                <option value="150">Mozambique</option>
                                                                                                                                                                                                                                                                                                                                <option value="151">Myanmar</option>
                                                                                                                                                                                                                                                                                                                                <option value="152">Namibia</option>
                                                                                                                                                                                                                                                                                                                                <option value="153">Nauru</option>
                                                                                                                                                                                                                                                                                                                                <option value="154">Nepal</option>
                                                                                                                                                                                                                                                                                                                                <option value="155">Netherlands</option>
                                                                                                                                                                                                                                                                                                                                <option value="156">Netherlands Antilles</option>
                                                                                                                                                                                                                                                                                                                                <option value="157">New Caledonia</option>
                                                                                                                                                                                                                                                                                                                                <option value="158">New Zealand</option>
                                                                                                                                                                                                                                                                                                                                <option value="159">Nicaragua</option>
                                                                                                                                                                                                                                                                                                                                <option value="160">Niger</option>
                                                                                                                                                                                                                                                                                                                                <option value="161">Nigeria</option>
                                                                                                                                                                                                                                                                                                                                <option value="162">Niue</option>
                                                                                                                                                                                                                                                                                                                                <option value="163">Norfolk Island</option>
                                                                                                                                                                                                                                                                                                                                <option value="164">Northern Mariana Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="165">Norway</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <option value="166">Oman</option>
                                                                                                                                                                                                                                                                                                                                <option value="167">Pakistan</option>
                                                                                                                                                                                                                                                                                                                                <option value="168">Palau</option>
                                                                                                                                                                                                                                                                                                                                <option value="169">Palestinian Territory, Occupied</option>
                                                                                                                                                                                                                                                                                                                                <option value="170">Panama</option>
                                                                                                                                                                                                                                                                                                                                <option value="171">Papua New Guinea</option>
                                                                                                                                                                                                                                                                                                                                <option value="172">Paraguay</option>
                                                                                                                                                                                                                                                                                                                                <option value="173">Peru</option>
                                                                                                                                                                                                                                                                                                                                <option value="174">Philippines</option>
                                                                                                                                                                                                                                                                                                                                <option value="175">Pitcairn</option>
                                                                                                                                                                                                                                                                                                                                <option value="176">Poland</option>
                                                                                                                                                                                                                                                                                                                                <option value="177">Portugal</option>
                                                                                                                                                                                                                                                                                                                                <option value="178">Puerto Rico</option>
                                                                                                                                                                                                                                                                                                                                <option value="179">Qatar</option>
                                                                                                                                                                                                                                                                                                                                <option value="181">Romania</option>
                                                                                                                                                                                                                                                                                                                                <option value="182">Russian Federation</option>
                                                                                                                                                                                                                                                                                                                                <option value="183">Rwanda</option>
                                                                                                                                                                                                                                                                                                                                <option value="180">Réunion</option>
                                                                                                                                                                                                                                                                                                                                <option value="184">Saint Barthélemy</option>
                                                                                                                                                                                                                                                                                                                                <option value="185">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                                                                                                                                                                                                                                                                                <option value="186">Saint Kitts and Nevis</option>
                                                                                                                                                                                                                                                                                                                                <option value="187">Saint Lucia</option>
                                                                                                                                                                                                                                                                                                                                <option value="188">Saint Martin (French part)</option>
                                                                                                                                                                                                                                                                                                                                <option value="189">Saint Pierre and Miquelon</option>
                                                                                                                                                                                                                                                                                                                                <option value="190">Saint Vincent and the Grenadines</option>
                                                                                                                                                                                                                                                                                                                                <option value="191">Samoa</option>
                                                                                                                                                                                                                                                                                                                                <option value="192">San Marino</option>
                                                                                                                                                                                                                                                                                                                                <option value="193">Sao Tome and Principe</option>
                                                                                                                                                                                                                                                                                                                                <option value="194">Saudi Arabia</option>
                                                                                                                                                                                                                                                                                                                                <option value="195">Senegal</option>
                                                                                                                                                                                                                                                                                                                                <option value="196">Serbia</option>
                                                                                                                                                                                                                                                                                                                                <option value="197">Seychelles</option>
                                                                                                                                                                                                                                                                                                                                <option value="198">Sierra Leone</option>
                                                                                                                                                                                                                                                                                                                                <option value="199">Singapore</option>
                                                                                                                                                                                                                                                                                                                                <option value="200">Slovakia</option>
                                                                                                                                                                                                                                                                                                                                <option value="201">Slovenia</option>
                                                                                                                                                                                                                                                                                                                                <option value="202">Solomon Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="203">Somalia</option>
                                                                                                                                                                                                                                                                                                                                <option value="204">South Africa</option>
                                                                                                                                                                                                                                                                                                                                <option value="205">South Georgia and the South Sandwich Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="206">Spain</option>
                                                                                                                                                                                                                                                                                                                                <option value="207">Sri Lanka</option>
                                                                                                                                                                                                                                                                                                                                <option value="208">Sudan</option>
                                                                                                                                                                                                                                                                                                                                <option value="209">Suriname</option>
                                                                                                                                                                                                                                                                                                                                <option value="210">Svalbard and Jan Mayen</option>
                                                                                                                                                                                                                                                                                                                                <option value="211">Swaziland</option>
                                                                                                                                                                                                                                                                                                                                <option value="212">Sweden</option>
                                                                                                                                                                                                                                                                                                                                <option value="213">Switzerland</option>
                                                                                                                                                                                                                                                                                                                                <option value="214">Syrian Arab Republic</option>
                                                                                                                                                                                                                                                                                                                                <option value="215">Taiwan</option>
                                                                                                                                                                                                                                                                                                                                <option value="216">Tajikistan</option>
                                                                                                                                                                                                                                                                                                                                <option value="217">Tanzania, United Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="218">Thailand</option>
                                                                                                                                                                                                                                                                                                                                <option value="219">Timor-Leste</option>
                                                                                                                                                                                                                                                                                                                                <option value="220">Togo</option>
                                                                                                                                                                                                                                                                                                                                <option value="221">Tokelau</option>
                                                                                                                                                                                                                                                                                                                                <option value="222">Tonga</option>
                                                                                                                                                                                                                                                                                                                                <option value="223">Trinidad and Tobago</option>
                                                                                                                                                                                                                                                                                                                                <option value="224">Tunisia</option>
                                                                                                                                                                                                                                                                                                                                <option value="225">Turkey</option>
                                                                                                                                                                                                                                                                                                                                <option value="226">Turkmenistan</option>
                                                                                                                                                                                                                                                                                                                                <option value="227">Turks and Caicos Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="228">Tuvalu</option>
                                                                                                                                                                                                                                                                                                                                <option value="229">Uganda</option>
                                                                                                                                                                                                                                                                                                                                <option value="230">Ukraine</option>
                                                                                                                                                                                                                                                                                                                                <option value="231">United Arab Emirates</option>
                                                                                                                                                                                                                                                                                                                                <option value="232">United Kingdom</option>
                                                                                                                                                                                                                                                                                                                                <option value="233">United States</option>
                                                                                                                                                                                                                                                                                                                                <option value="234">United States Minor Outlying Islands</option>
                                                                                                                                                                                                                                                                                                                                <option value="235">Uruguay</option>
                                                                                                                                                                                                                                                                                                                                <option value="236">Uzbekistan</option>
                                                                                                                                                                                                                                                                                                                                <option value="237">Vanuatu</option>
                                                                                                                                                                                                                                                                                                                                <option value="238">Venezuela, Bolivarian Republic of</option>
                                                                                                                                                                                                                                                                                                                                <option value="239">Vietnam</option>
                                                                                                                                                                                                                                                                                                                                <option value="240">Virgin Islands, British</option>
                                                                                                                                                                                                                                                                                                                                <option value="241">Virgin Islands, U.S.</option>
                                                                                                                                                                                                                                                                                                                                <option value="242">Wallis and Futuna</option>
                                                                                                                                                                                                                                                                                                                                <option value="243">Western Sahara</option>
                                                                                                                                                                                                                                                                                                                                <option value="244">Yemen</option>
                                                                                                                                                                                                                                                                                                                                <option value="245">Zambia</option>
                                                                                                                                                                                                                                                                                                                                <option value="246">Zimbabwe</option>
                                                                                                                                                                                            </select>
               
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
															<span class="translate">Mobile Contact Number:</span><br>
      <input kl_virtual_keyboard_secure_input="on" maxlength="25" oncopy="return false;" oncut="return false;" onpaste="return false;" name="mobile" value="" id="payment_contact_number" type="tel">
                                                            
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label style="margin-bottom: 0;">
                                                            <span class="translate">Total Number of Guests:</span>
                                                        </label>
                                                        <div class="form-inline">
                                                            <label class="sub-label" style="margin-right: 5px;">
                                                                <span class="translate">Adults</span>
                                                                <span class="help-block translate" style="font-weight: normal">(Ages: 13+)</span>                                                        
    <select name="adults" id="payment_adults" class="span1" style="width:50px;">
                                                                                                                                        
                                                                                                                                        <option value="1" selected="">1</option>
                                                                                                                                        <option value="2">2</option>
                                                                                                                                        <option value="3">3</option>
                                                                                                                                        <option value="4">4</option>
                                                                                                                                    </select>
                                                            </label>
                                                            
                          <label class="sub-label">
                                                                                                                                                   <span class="translate">Children</span>
                   <span class="help-block translate" style="font-weight: normal;">(Ages: 1-12)</span>
    <select name="child" id="payment_children" class="span1" style="width:50px;">
                                                                                                                                        <option value="0" selected="">0</option>
                                                                                                                                        <option value="1">1</option>
                                                                                                                                        <option value="2">2</option>
                                                                                                                                        <option value="3">3</option>
        
                                                                                                                                    </select>
                                                                                                                            </label>
             <span id="occuerror" class="lblerror translate"></span>
             <span id="occuerror_num" class="lblerror translate" style="display:none;">Choose number of guests.</span>
            </div>
                                                    </td>
                                                    <td>
                                                        <label>
        <span class="translate">Estimated Time of Arrival at Hotel:</span>
    <select name="time" id="payment_eta" style="display: inline-block">
                                                                                                                                <option value="12:00 AM">12:00 AM</option>
                                                                                                                                <option value="12:15 AM">12:15 AM</option>
                                                                                                                                <option value="12:30 AM">12:30 AM</option>
                                                                                                                                <option value="12:45 AM">12:45 AM</option>
                                                                                                                                <option value="5">01:00 AM</option>
                                                                                                                                <option value="6">01:30 AM</option>
                                                                                                                                <option value="7">01:45 AM</option>
                                                                                                                                <option value="8">02:00 AM</option>
                                                                                                                                <option value="9">02:15 AM</option>
                                                                                                                                <option value="10">02:30 AM</option>
                                                                                                                                <option value="11">02:45 AM</option>
                                                                                                                                <option value="12">03:00 AM</option>
                                                                                                                                <option value="13">03:15 AM</option>
                                                                                                                                <option value="14">03:30 AM</option>
                                                                                                                                <option value="15">03:45 AM</option>
                                                                                                                                <option value="16">04:00 AM</option>
                                                                                                                                <option value="17">04:15 AM</option>
                                                                                                                                <option value="18">04:30 AM</option>
                                                                                                                                <option value="19">04:45 AM</option>
                                                                                                                                <option value="20">05:00 AM</option>
                                                                                                                                <option value="21">05:15 AM</option>
                                                                                                                                <option value="22">05:30 AM</option>
                                                                                                                                <option value="23">05:45 AM</option>
                                                                                                                                <option value="24">06:00 AM</option>
                                                                                                                                <option value="25">06:15 AM</option>
                                                                                                                                <option value="26">06:30 AM</option>
                                                                                                                                <option value="27">06:45 AM</option>
                                                                                                                                <option value="28">07:00 AM</option>
                                                                                                                                <option value="29">07:15 AM</option>
                                                                                                                                <option value="30">07:30 AM</option>
                                                                                                                                <option value="31">07:45 AM</option>
                                                                                                                                <option value="32">08:00 AM</option>
                                                                                                                                <option value="33">08:15 AM</option>
                                                                                                                                <option value="34">08:30 AM</option>
                                                                                                                                <option value="35">08:45 AM</option>
                                                                                                                                <option value="36">09:00 AM</option>
                                                                                                                                <option value="37">09:15 AM</option>
                                                                                                                                <option value="38">09:30 AM</option>
                                                                                                                                <option value="39">09:45 AM</option>
                                                                                                                                <option value="40">10:00 AM</option>
                                                                                                                                <option value="41">10:15 AM</option>
                                                                                                                                <option value="42">10:30 AM</option>
                                                                                                                                <option value="43">10:45 AM</option>
                                                                                                                                <option value="44">11:00 AM</option>
                                                                                                                                <option value="45">11:15 AM</option>
                                                                                                                                <option value="46">11:30 AM</option>
                                                                                                                                <option value="47">11:45 AM</option>
                                                                                                                                <option value="48">12:00 PM</option>
                                                                                                                                <option value="49">12:15 PM</option>
                                                                                                                                <option value="50">12:30 PM</option>
                                                                                                                                <option value="51">12:45 PM</option>
                                                                                                                                <option value="52" selected="">01:00 PM</option>
                                                                                                                                <option value="53">01:15 PM</option>
                                                                                                                                <option value="54">01:30 PM</option>
                                                                                                                                <option value="55">01:45 PM</option>
                                                                                                                                <option value="56">02:00 PM</option>
                                                                                                                                <option value="57">02:15 PM</option>
                                                                                                                                <option value="58">02:30 PM</option>
                                                                                                                                <option value="59">02:45 PM</option>
                                                                                                                                <option value="60">03:00 PM</option>
                                                                                                                                <option value="61">03:15 PM</option>
                                                                                                                                <option value="62">03:30 PM</option>
                                                                                                                                <option value="63">03:45 PM</option>
                                                                                                                                <option value="64">04:00 PM</option>
                                                                                                                                <option value="65">04:15 PM</option>
                                                                                                                                <option value="66">04:30 PM</option>
                                                                                                                                <option value="67">04:45 PM</option>
                                                                                                                                <option value="68">05:00 PM</option>
                                                                                                                                <option value="69">05:15 PM</option>
                                                                                                                                <option value="70">05:30 PM</option>
                                                                                                                                <option value="71">05:45 PM</option>
                                                                                                                                <option value="72">06:00 PM</option>
                                                                                                                                <option value="73">06:15 PM</option>
                                                                                                                                <option value="74">06:30 PM</option>
                                                                                                                                <option value="75">06:45 PM</option>
                                                                                                                                <option value="76">07:00 PM</option>
                                                                                                                                <option value="77">07:15 PM</option>
                                                                                                                                <option value="78">07:30 PM</option>
                                                                                                                                <option value="79">07:45 PM</option>
                                                                                                                                <option value="80">08:00 PM</option>
                                                                                                                                <option value="81">08:15 PM</option>
                                                                                                                                <option value="82">08:30 PM</option>
                                                                                                                                <option value="83">08:45 PM</option>
                                                                                                                                <option value="84">09:00 PM</option>
                                                                                                                                <option value="85">09:15 PM</option>
                                                                                                                                <option value="86">09:30 PM</option>
                                                                                                                                <option value="87">09:45 PM</option>
                                                                                                                                <option value="88">10:00 PM</option>
                                                                                                                                <option value="89">10:15 PM</option>
                                                                                                                                <option value="90">10:30 PM</option>
                                                                                                                                <option value="91">10:45 PM</option>
                                                                                                                                <option value="92">11:00 PM</option>
                                                                                                                                <option value="93">11:15 PM</option>
                                                                                                                                <option value="94">11:30 PM</option>
                                                                                                                                <option value="95">11:45 PM</option>
                                                                                                                            </select>
      
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="2">
                                                        <label>
                                                            <!--<a href="javascript:void(0)" class="requests" id="specialrequestlnk">-->
                                                            <span class="translate">Special Request</span>
                                                            <!--</a>-->
                                                            <span class="help-block translate" style="width: 80%">(Optional. You may also specify your flight details here.please dont use commas)</span>
                                                            <textarea rows="6" cols="25" style="width: 95%; margin-top: 0;" name="specialrequest" id="payment_specialrequest" maxlength="350"></textarea>
                                                        </label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
								
					
									

                                     
                                        <div class="span5">
                                            <h3 class="translate">Credit Card Details</h3>
                                            <div>
            <div id="total-deposit" style="text-align: left;">
           No prepayment will be charged. Your credit card is needed to guarantee your reservation. You will pay the total reservation cost at the hotel. Please note that your card may be <a href="#idPreAUTHFAQs" id="idPreAUTHFAQ" data-toggle="modal">pre-authorized</a> prior to your arrival.
        </div>
        
    <table class="table table-condensed payment" style="margin-bottom: 0; padding-bottom: 0">
        <tbody>
            <tr>
                <td>
                    <span id="carderror" class="lblerror translate" style="display:none;">Choose a card type.</span>
                    <label>
                        <span class="translate">Card Type:</span>
                        <select name="cardtype" id="payment_cc_type">
                            <option value=""></option>
                                                                                    <option value="Mastercard">Mastercard</option>
                                                                                    <option value="Visa">Visa</option>
                                                                                    <option value="American Express">American Express</option>
                                                    </select>
                    </label>
                </td>
               
            </tr>
            <tr>
                <td>
                    <label>
                        <span class="translate">Card Number:</span>
                        <span class="help-block translate">(Card number should not contain spaces and/or special characters.)</span>
                        <input id="card-number" name="number" type="text" class="form-control" placeholder="insert credit card number"/>
                        
                        
                    </label>
                </td>
            </tr>
            <tr>    
                <td>
                    <span class="translate">Is the Guest also the Card Owner?</span> <br>
                    <input style="width: 30px !important;" id="opt_yes" value="yes" name="isowner" type="radio">Yes
                    <input style="width: 30px !important;" id="opt_no" value="no" name="isowner" type="radio">No
                    <span id="ccnameopterror" class="lblerror translate" style="display:none;">Please choose from the options.</span>
                    <br><br>
                    <label id="cc_name">
					 <span class="translate">Card Owner Name:</span>
                      <!--  <span class="translate">Name of Card Owner:</span><br>
                        <input maxlength="50" name="payment[cc_name]" value="" id="payment_cc_name" class="uneditable-input"  type="text">-->
                        <input id="guestname" name="guestname" type="text" class="form-control" placeholder="card-holder-name">
                       
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label style="margin-bottom: 0;">
                        <span class="translate">Expiration Date:</span>
                    </label>

                    <div class="form-inline">
                        <select name="expiremonth" id="payment_cc_exp_month" class="cc-dates span1">
                                                                                    <option value="">MM</option>
                                                                                    <option value="01">1</option>
                                                                                    <option value="02">2</option>
                                                                                    <option value="03">3</option>
                                                                                    <option value="04">4</option>
                                                                                    <option value="05">5</option>
                                                                                    <option value="06">6</option>
                                                                                    <option value="07">7</option>
                                                                                    <option value="08">8</option>
                                                                                    <option value="09">9</option>
                                                                                    <option value="10">10</option>
                                                                                    <option value="11">11</option>
                                                                                    <option value="12">12</option>
                                                    </select>

                        <select name="expireyear" id="payment_cc_exp_year" class="cc-dates span1">
                                                                                    <option value="">YYYY</option>
                                                                                    <option value="2015">2015</option>
                                                                                    <option value="2016">2016</option>
                                                                                    <option value="2017">2017</option>
                                                                                    <option value="2018">2018</option>
                                                                                    <option value="2019">2019</option>
                                                                                    <option value="2020">2020</option>
                                                                                    <option value="2021">2021</option>
                                                                                    <option value="2022">2022</option>
                                                                                    <option value="2023">2023</option>
                                                                                    <option value="2024">2024</option>
                                                                                    <option value="2025">2025</option>
                                                                                    <option value="2026">2026</option>
                                                                                    <option value="2027">2027</option>
                                                                                    <option value="2028">2028</option>
                                                                                    <option value="2029">2029</option>
                                                                                    <option value="2030">2030</option>
                                                                                    <option value="2031">2031</option>
                                                                                    <option value="2032">2032</option>
                                                                                    <option value="2033">2033</option>
                                                                                    <option value="2034">2034</option>
                                                    </select>
                    </div>
                    
                </td>
                <td>
                    <label>
                        <span class="translate">Security Code:</span>
                        <input kl_virtual_keyboard_secure_input="on" maxlength="4" class="secode" name="code" value="" id="payment_cc_cvv" type="tel"/>
                       
                        <a id="securecode" href="javascript:void(0)" class="help-block translate">What is this?</a>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="accept checkbox" style="margin-bottom: 0;">
                        <input name="checkbox" id="heckbox" type="checkbox">
                                                <span class="translate">I have read and accept the</span> <a href="javascript:void(0)" id="terms"><span class="translate">Terms of Reservation and Hotel Policies</span></a>.
                                            </label>
                    
                    
                                    </td>
            </tr>
            
            <tr>
                <td colspan="2">
                                        
                    <span class="pull-right" style="text-align:center;">
                                                <p style="text-align: center; margin-top: -10px; margin-bottom: 0;">
                            <button id="btnNext" onclick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"  class="btn btn-primary btn-large translate enable" style="font-size: 18px;float:left;">Confirm Reservation &raquo;</button>
                        </p>
                    </span>
                                    </td>
            </tr>
        </tbody>
    </table>
</div>                                        </div>
</form>
                                    
                                                                <!-- to check if day valid in fullpayment reservation  ,,,,
                                <input name="is_valid_day" id="is_valid_day" value="1" type="hidden">
                                -->
                           
                        </div>
                    </div>
                </div>	

			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"/>
			<script src="src/regex.js" type="text/javascript"/>
		
	<script src="https://cdn.directwithhotels.com/8.0/desktop/js/private-accounts-min-cb20150813.js"></script>
	<script src="https://cdn.directwithhotels.com/8.0/desktop/js/gi-all-min-cb20150813.js"></script>
	<script src="https://cdn.directwithhotels.com/8.0/desktop/js/step3new-min-cb20150813.js"></script>
	<script src="https://cdn.directwithhotels.com/8.0/desktop/js/step3new-min-cb20150813.js"></script>
			
			
			
			
   
		</body>



		