<!DOCTYPE HTML >
<html>


<head>
<link rel="stylesheet" type="text/css" href="css/mainstyle1.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/slideshow.css">
<link rel="stylesheet" type="text/css" href="css/slide.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<title>Hotels in Sri Lanka | Five Star Hotels in Sri Lanka | MATARA BEACH HOTEL Sri Lanka</title>
<link rel="icon" href="images/logopreview.png" type="image" />
<link rel="shortcut icon" href="images/logopreview.png" type="image" />
 <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
	
<script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
</head>
<body>
<!--  -->

<!--begin of the body  -->
<!--*****************************************************  -->

<!--************* beginning of the header*******************-->

<div id="main-wrapper-header">
  <div class="main-wrapper-header-bg">
    <div class="main-wrapper-header-div">
	
	<!-- style inside the html-->
    <style type="text/css">
h3 { color: #FFFFFF;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 11px;
    font-weight: bold;
    text-decoration: none;
    }	
	
	.res1{
		padding-top:30px;
		padding-left:350px;
		
		
.col1{
	padding-left:500px;
	
}

.col2{
	padding-left:500px;
	
}
	
	
	.main-wrapper-header-div-res-right{
		width:400px;
		
		
	}
	</style>
    
    <style>
a {
    color: #FF0000;
}
</style>

<div class="main-wrapper-header-div-logo"><a href="index.html"><img src="images/logo2.png" alt="Matara Beach Hotel Sri Lanka" width="400" height="150" border="0" title="Matara Beach Hotel Sri Lanka" /></a></div>
 
		
		<div class="main-wrapper-header-div-res-right">
		
		
		
		
		
		<div class="col1" style="float:left; width:101px; height:auto;">
  
    <div class="col2"style="float:left; width:101px; height:auto;">
    
	<div class="res1">
	 <a href="reserve.php">	
					<img src="images/reservation.png" alt="MATARA Beach Hotel"  width="131" height="35" border="0" title="MATARA Beach Hotel" />
				</a>
</div>
</div>
	
</div>
		
		
		
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: homelogout.php");
}
$res1=mysql_query("select * from reg where UserName = '".$_SESSION['user']."'") or die(mysql_error());
$userRow =mysql_fetch_array($res1);


?>

<div class="main" >
 <a rel="facebox" href="modify.php" style=" font-size:15px;font-color:red;text-decoration: none;"><font  color=#66FF00>Modify</font></a> <font  color=#66FF00><font  color="white">/</font><font> <a href="cancel.php" style=" font-size:15px; font-color:red;text-decoration: none;"><font  color=#66FF00>Cancel</font></a><font size="4" color="white"> Reservation </font> 


<form method="post">
   
<div class="loginbtn">
  <span  style="color:white"> Welcome <font color="yellow"><?php echo $userRow['UserName']."<br>"; ?> </font>&nbsp;</span>
	<!--<input type="submit" style="background-color:lightgreen;width:70px" value="LogOut" name="logout" class="login-btn" />-->

  <a href="logout.php?logout" style="text-decoration:none"><font color=#66FF00>Sign Out</font></a>
</div>
</form>
  <div class="submenu">
				
				
                    <div class="main-wrapper-header-menu-div-2"><h3><a href="http://www.galadarihotel.lk/contact.php" style="text-decoration:none"	 >CONTACT US</a></h3></div>
                   <div class="main-wrapper-header-menu-div-2 "><h3><a href="http://www.galadarihotel.lk/careers.php" style="text-decoration:none" >CAREERS</a></h3></div>
                               
                   
                   <div class="main-wrapper-header-menu-div-2"><h3><a href="http://www.galadarihotel.lk/promotions.php" style="text-decoration:none">PROMOTIONS</a></h3></div>
                    <div class="main-wrapper-header-menu-div-2 "><h3><a href="http://www.galadarihotel.lk/about.php" style="text-decoration:none">ABOUT</a></h3></div>
                  <div class="main-wrapper-header-menu-div-2"><h3><a href="homelogout.php" style="text-decoration:none">HOME</a></h3></div>
                </div>





</div>
  
  
 
  
			 
		</div>
				
				<!--*********************** sub menu*****************-->
				
              
           </div>    
			
			</div>
  </div>
</div>

	
	<!-- ************content begin*************************-->
	<!--*****************************************************  -->
	
<div class="main-wrapper-content-bg">
  <div class="main-wrapper-content-div">
  
  		
<!--**********************************************************************************
Content - MENU BEGIN
**************************************************************************************
-->

    <div class="main-wrapper-content-menu-div">
	
	<!-- ul unordered list -->
	
	<ul id="menu">
    
<!--  li tag means list __ ol ordered list ___ ul unordered list  -->


	<!-- ACCOMMODATION TAB -->
	<!--  <a href="#"> is often used for links that have JavaScript attached to them
			<a href="javascript: void(0)">I am a useless link</a>
			
			This is just a ''null'' value - which means the anchor will be seen as live (and would also enable use of the <title> tag), and should produce a hand pointer on hover - but it's use will take the user back to the same page he is on.
	
			A named anchor of course would be something like - <a name="marker"></a> - that then called by a suitable link on the page to scroll down to the named anchor target <a href="marker"></a> - or at the end of a full link - <a href="http://www.mysite.com/apage.htm#marker">Target page and target content position</a> In this case the pound sign is used other than on its own, as we saw in the ''null'' link example.
			
			href="#" is used to active/enable the link on your page.
			
			
			The <a> tag defines a hyperlink, which is used to link from one page to another.The most important attribute of the <a> element is the href attribute, which indicates the link's destination.By default, links will appear as follows in all browsers:
    An unvisited link is underlined and blue
    A visited link is underlined and purple
    An active link is underlined and red

	-->
    <li><a  href="#" class="drop">ACCOMMODATION</a><!-- ACCOMMODATION -->
    
        <div class="dropdown_5columns" style="width:560px;"><!-- Begin 5 columns container -->
        
            <div class="col_1">
            <h2 style="font-size:12px; color:#EEEDED;height:27px;letter-spacing: 1px;">PRESIDENTIAL <br />
FLOOR</h2>
              <div class="pic"><img src="images/hotel1.jpg" alt="" /></div>

 <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">A Floor fit for Royalty that spells luxury the moment you walk in.</span></p>
                  
                  <ul class="bullets">
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Presidential Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Diplomatic Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Royal Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Presidential Floor Room</span></li>
                  </ul>
				  
				  <!-- No floating elements allowed on the left or the right side of a specified  element:-->
                  <div  style="clear:both; height:25px;"></div>
                  
                  <table border="0">
                    <tbody> <!-- table body -->
                      <tr> <!-- The tr tag defines a row in an HTML table.
					             The <th> tag defines a header cell in an HTML table.
								 The <td> tag defines a standard cell in an HTML table.
								     Header cells - contains header information (created with the <th> element)
									Standard cells - contains data (created with the <td> element)

					  -->
                        <td>
             
                        <a class="linkmore" href="http://www.galadarihotel.lk/accommodation/presidential-floor">Learn more</a>
                        
                        </td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>

            </div>
            
            <div class="col_1">
                
                  <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">EXECUTIVE <br />
FLOOR</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/accomodation/executive_floor.jpg" alt=""  /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">The ideal accommodation for the discerning business traveller, including the luxury of entertaining your colleagues...</span></p>
                
                  <ul >
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Executive Floor Presidential Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Executive Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Executive Floor Room</span></li>
                  </ul>
                  
              <div  style="clear:both; height:10px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td>  
                        
                       <a class="linkmore" href="http://www.galadarihotel.lk/accommodation/executive">Learn more</a>
                        
                        
                        </td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
                
                
                
            </div>
            
            <div class="col_1">
             
                  <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">SUPERIOR <br />
FLOORS</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/accomodation/superior_floors.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">These deluxe guest rooms offer VIP amenities for our distinguished traveller.</span></p>
                  
                  <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Superior Suite</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Superior Room</span></li>
                  </ul>
                  
              <div  style="clear:both; height:48px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td>  <a class="linkmore" href="http://www.galadarihotel.lk/accommodation/superior-floors">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
             
                
            </div>
                
        
        </div><!-- End 5 columns container -->
    
    </li><!-- End 5 columns Item -->
  
  	<!-- end the ACCOMMODATION -->
  
	<!-- begin the DINing -->
<li><a href="#" class="drop">DINING</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns" style="margin:0 0 0 -200px; width:900px;"><!-- Begin 5 columns container  margin for the place appear in the page-->
        
            <div class="col_1">
             <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">THE COFFEE <br />
SHOP</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/dining/the-coffee-shop.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">With themes complimenting the fine dishes that appears in front of you this bright and airy dining room offers a relaxing and casual atmosphere.</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Inclusive of A la Carte menu</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Daily buffet for breakfast and Lunch</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Popular Asian Specialities</span></li>
                  </ul>
                  
              <div  style="clear:both; height:45px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/dining/the-coffee-shop">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
              
               
            </div>
            
         
            <div class="col_1">
      <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">CAFE 64 <br />
 PASTRY SHOP</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/entertainment/pastry_shop.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">The divine smell hits you first and yummy!!.. You can even walk in to it with your Eyes Closed.</span></p>
<p><span style="color: #000000;"><br />
                  </span></p>
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Wide range of Delicious Pastries, Sandwiches, Cakes etc...</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Handmade Chocolates, Sweets, Fresh Juices...</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- And the only pastry Shop that Serves Beer and Ice-Cream</span></li>
                  </ul>
                  
              <div  style="clear:both; height:15px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/dining/pastry-shop-garden-terrace">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
            </div>
            
            <div class="col_1">
            
          <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">FLAVOURS INDIAN<br />
 RESTAURANT</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/dining/sheherezade_arabic_restaurant.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;"> Inspired by the wonder of Indian cuisine, Galadari ventures in to an Indian gastronomy with "Flavours" the newest addition to our range of restaurants.</span></p>
                  <p><span style="color: #000000;"><br />
                  </span></p>
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Bright interiors and warm ambience</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Exotic signature dishes</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Ideal place for a re-bonding of family and friends</span></li>
                  </ul>
                  <div  style="clear:both; height:2px;"></div>
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/dining/flavors--indian--restaurant">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
            </div>
            
            
            <div class="col_1">
            
            <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">SHEHEREZADE <br />
ARABIC RESTAURANT</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/dining/stix_chinese_restaurant.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Craving for an Arabian delicacy? Well Sheherezade Arabic Restaurant is the best place in town to go all Arabian.</span></p>
                  <p><span style="color: #000000;"><br />
                  </span></p>
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Provides Authentic Arabic Cuisine</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Availability of an A la Carte Menu</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Garden Area for Private or Family Dining</span></li>
                  </ul>
                  <div  style="clear:both; height:39px;"></div>
                  
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/dining/sheherezade-arabic-restaurant">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
            
               
            </div>
            
            
            <div class="col_1">
            
        <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">CALIFORNIA <br />
GRILL</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/dining/california_grill.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">The best Seafood and stakes in rooftop... what more can you ask for!!! It's an enchanted atmosphere filling up all your delights!!!</span></p>
                  <p><span style="color: #000000;"><br />
                  </span></p>
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Fine combination of Piano &amp; Dancing</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- A la Carte menu</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Private Dining Room and Pre Dinner Cocktail Area</span></li>
                  </ul>
                  
              <div  style="clear:both; height:2px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/dining/california-grill">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
            </div>
            
            
        
        </div><!-- End 5 columns container -->
    
    </li>
    
		<!-- end the DINing -->
		
		
			<!-- begin the ENTERTAINMENT -->
	
    <li><a href="#" class="drop">ENTERTAINMENT</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns" style="width:400px;"><!-- Begin 5 columns container -->
        
            <div class="col_1">
               
                 <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">MARGARITA BLUE <br />RETRO PUB</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/entertainment/margarita-blue-retro-pub.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Starting from tasty appetizers you get to take pleasure in tantalizing main dishes and desserts, while moisturizing your lips with an outstanding Beverage Menu.</span></p>
                 
                  <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Music by one of the Best Bands</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Play Pool, snooker or darts to your Heart's Content</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Or just relax and watch the live play on Giant Screen</span></li>
                  </ul>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td>
                        <a class="linkmore" href="http://www.galadarihotel.lk/entertainment/margarita-blue-retro-pub">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
               
            </div>
            
            <div class="col_1">
                <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">LOBBY <br />BAR</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/dining/lobby_bar.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">As the sun sets let&acute;s huddle up in this highly desirable place to meet, socialize or enjoy an elegant afternoon of high tea.</span></p>
                  
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Mellow sounds to calm your Being</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Live entertainers creating soul Soothing Melodies</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Tongue Tantalizing Refreshes</span></li>
                  </ul>
                  
              <div  style="clear:both; height:38px;"></div>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td>
                        <a class="linkmore" href="http://www.galadarihotel.lk/entertainment/lobby-bar">Learn more</a>
                        
                        </td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            
           
        
        </div><!-- End 5 columns container -->
    
    </li>
	<!-- end the ENTERTAINMENT -->
	
	<!-- begin the FACILITIES -->
    
    <li><a href="#" class="drop">FACILITIES</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns align_right" style="margin:0 -305px 0 0 ; width:900px;"><!-- Begin 5 columns container -->
        
            <div class="col_1">
               
                <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">HEALTH CLUB <br />AND POOL</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/facilities/health_club_pool.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">After a stressful workday, the Galadari Health Club offers the ideal way to Release Tension.</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Try the fully Equipped Gymnasium</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Rest your Muscles in the Steam Room or Sauna</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Or take a dip in our open Air Pool with Ocean Views.</span></li>
                  </ul>
                  <div  style="clear:both; height:2px;"></div>
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/facilities/health-club-and-pool">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
               
            </div>
            
            <div class="col_1">
                
                 <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">BODY CARE <br />
&amp; MASSAGE THERAPY</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/facilities/body_care_massage_therapy.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Indulge your senses with a smoothing massage for jet lag and tiredness. That relaxes and refreshes both body and mind.</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Healing Mind &amp; Body</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Relieve jet lag, neck &amp; back Pains from Travelling</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Massage Treatments with Reflexology</span></li>
                  </ul>
                                    <div  style="clear:both; height:2px;"></div>

                  
              <table border="0">
                    <tbody>
                      <tr>
                        <td>
     <a class="linkmore" href="http://www.galadarihotel.lk/facilities/body-care-massage-therapy">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
                
            </div>
            
            <div class="col_1">
                
                 <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">TENNIS <br />COURT</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/facilities/tennis_court.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Open for guests who prefer to enjoy the exhilaration of the game, in a relaxed atmosphere.</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- A Floodlit Tennis Court</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Total Freedom</span></li>
                  </ul>
                  <div  style="clear:both; height:79px;"></div>
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/facilities/tennis-court">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
                
                
            </div>
            
            <div class="col_1">
               
                <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">FLORAL 
                  ARRANGEMENTS<br />
                  &amp; BOUQUESTS</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/facilities/florist.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">A Fabulous Collection of Flowers Dressed in the most Elegant of Designs to Match Every Mood and Moment.</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- The Best Floral Arrangements to let know your Thoughts.</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Special Arrangements done in Fresh or Artificial Flowers.</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Open 24hrs</span></li>
                  </ul>
                  <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/facilities/florist">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
               
            </div>
            
            <div class="col_1">
               
                <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">LAUNDRY DRY <br />
                  CLEANING SERVICES </h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/facilities/laundrette.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">To Make you Comfortable is What we Strive For...</span></p>
                 
              <ul>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Our laundrette is open Monday to Saturday from 7:00am until 7:00pm</span></li>
                    <li><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">- Sundays and public holidays from 8:00am until 5:00pm.</span></li>
                  </ul>
                  <div  style="clear:both; height:35px;"></div>
                  
                  
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/facilities/laundrette">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
               
               
            </div>
            
            
        
        </div><!-- End 5 columns container -->
    
    </li>

	
	<!-- end the FACILITIES -->
	<!-- begin the FUNCTIONS -->
<li><a href="#" class="drop">FUNCTIONS</a><!-- Begin 5 columns Item -->
    
        <div class="dropdown_5columns align_right" style="width:550px;"><!-- Begin 5 columns container -->
        
          
            <div class="col_1">
               <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">WEDDINGS AND 
                     <br />
                     BANQUETS</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/meetings/the_grand_ballroom.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Perfecting the little details that make your wedding day everything you have ever imagined, the Galadari combines exceptional cuisines with impeccable levels service. </span></p>
                 
              <div  style="clear:both; height:30px;"></div>
 
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/functions/weddings-banquets">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            
            <div class="col_1">
                <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">MEETINGS &amp;<br />

 CONFERENCES</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/meetings/araliya-meeting.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">Whether it is a casual meet up or a sophisticated business meeting, the Galadari is well equipped with over 24,000 sq. ft. of flexible meeting space and a selection of conference rooms to suite your every requirement. </span></p>
                 
                 
                 <div  style="clear:both; height:10px;"></div>
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/functions/meetings">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            
            <div class="col_1">
                 <h2 style="font-size:12px;height:27px;color:#EEEDED;letter-spacing: 1px;">CONVENTIONS &amp;<br />
                  EXHIBITIONS</h2>
                  <div class="pic"><img src="http://www.galadarihotel.lk/_images/main-menu/meetings/salon_anthurium.jpg" alt="" /></div>
                  <p><span style="color: #000000; font-size:11px; font-family:Tahoma, Geneva, sans-serif;">The Galadari Hotel is an ideal venue for conventions and exhibitions, despite the size of venue required.  </span></p>
                  
            <div  style="clear:both; height:62px;"></div>
              <table border="0">
                    <tbody>
                      <tr>
                        <td><a class="linkmore" href="http://www.galadarihotel.lk/functions/conventions-exhibitions">Learn more</a></td>
                        <td style="text-align: right;"></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            
         
       
        
        </div><!-- End 5 columns container -->
    
    </li>
    
	<!-- end the FUNCTIONS -->
	
	<!-- begin the PRESS -->
	
<li><a href="http://www.galadarihotel.lk/press.php">PRESS</a><!-- Begin 5 columns Item -->
    
        <!-- End 5 columns container -->
    
    </li>

	<!-- end the PRESS -->
</ul>
	
	
	</div>
	
			
<!--**********************************************************************************
Content - Images_slideshow begin
**************************************************************************************
-->

<div class="main-wrapper-content-mImg-div">
		
      <div class="main-wrapper-content-mImg-div-1">
	  
	  
<div id="sliderFrame">
        <div id="slider">
            
            <img src="images/slide1.jpg" alt="" />
            <img src="images/slide2.jpg" alt="" />
            <img src="images/slide3.jpg" alt="" />
            <img src="images/slide4.jpg" alt="" />
            <img src="images/slide5.jpg" alt="" />
        </div>
        
    </div>
	  
	  </div>
	  </div>


				
<!--**********************************************************************************
          begin  text_content
**************************************************************************************
-->
	
	   <div class="main-wrapper-content-text-div">
      <div class="main-wrapper-content-text-div-1">
        <div class="main-content-top-div">
        
          <div class="main-content-top-div-2">
          
        <div style=" float:left; width:680px;">  
          
			<div class="main-content-top-div-3 text-style-4 ">
			<img src="_images/home-page/welcme.gif" alt="" width="116" height="18" title="hotels sri lanka" />WELCOME TO MATARA BEACH HOTEL </div>
            <div class="main-content-top-div-4 text-style-5">
            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FMatara-BEACH-HOTEL/1207628705920241%0A&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
			
				 <h2>The Five Star Hotel in Sri Lanka</h2> 
            </div>
            
            
            </div> 
            
         
            
          </div>
        
          

    </div>
        
        
        
      </div>
    </div>
  </div>
  
		
		
			
<!--**********************************************************************************
          begin  Footer
**************************************************************************************
-->


  <div class="footer-main-wrapper-div">
      <div class="footer-main-wrapper-div2">
<div class="footer-main-wrapper-div-1">
<div class="footer-main-wrapper-div-2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="98%" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">GALADARI</td>
            </tr>
          <tr>
		  
		  <!-- &nbsp; means non-breaking space -->
		  
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/" class="link4">Home</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/about.php" class="link4">About</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/press.php" class="link4">Press</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/promotions.php" class="link4">Promotions</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/contact.php" class="link4">Contact Us</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%">&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">ACCOMMODATION</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="10%"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td width="77%" align="left"><a href="http://www.galadarihotel.lk/accommodation/presidential-floor" class="link4">Presidential Floor</a></td>
            <td width="5%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/accommodation/executive" class="link4">Executive Floor</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/accommodation/superior-floors" class="link4">Superior Floors</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="2%">&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">DINING</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="9%"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td width="85%" align="left"><a href="http://www.galadarihotel.lk/dining/the-coffee-shop" class="link4">The Coffee Shop</a></td>
            <td width="4%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top" style="padding-top:3px;"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/dining/pastry-shop-garden-terrace" class="link4">Pastry Shop &amp; Garden <br />
              Terrace</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/dining/flavors--indian--restaurant" class="link4">Flavors Indian Restaurant</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top" style="padding-top:3px;"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/dining/sheherezade-arabic-restaurant" class="link4">Sheherezade Arabic <br />
              Restaurant</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/dining/california-grill" class="link4">California Grill</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="3%">&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">ENTERTAINMENT</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="8%"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td width="84%" align="left"><a href="http://www.galadarihotel.lk/entertainment/margarita-blue-retro-pub" class="link4">Margarita Blue Retro Pub</a></td>
            <td width="5%">&nbsp;</td>
          </tr>
          <tr>
            
            
           
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/entertainment/lobby-bar" class="link4">Lobby Bar</a></td>
            <td>&nbsp;</td>
          </tr>
          </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="2%">&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">FACILITIES</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="9%"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td width="83%" align="left"><a href="http://www.galadarihotel.lk/facilities/health-club-and-pool" class="link4">Health Club and Pool</a></td>
            <td width="6%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top" style="padding-top:3px;"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/facilities/body-care-massage-therapy" class="link4">Body Care &amp; Massage <br />
              Therapy</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/facilities/tennis-court" class="link4">Tennis Court</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/facilities/florist" class="link4">Florist</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/facilities/laundrette" class="link4">Laundrette</a></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="3%">&nbsp;</td>
            <td colspan="2" align="left" class="text-style-18">FUNCTIONS</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="8%"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td width="85%" align="left"><a href="http://www.galadarihotel.lk/functions/weddings-banquets" class="link4">Weddings And Banquets</a></td>
            <td width="4%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/functions/meetings" class="link4">Meetings</a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td valign="top" style="padding-top:3px;"><img src="http://www.galadarihotel.lk/_images/dot-1.gif" width="10" height="9" alt="" /></td>
            <td align="left"><a href="http://www.galadarihotel.lk/functions/conventions-exhibitions" class="link4">Conventions and <br />
              Exhibitions</a></td>
            <td>&nbsp;</td>
          </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
			</div> 
            </div>  
            <div class="footer-main-wrapper-div3">
                <div class="footer-main-wrapper-div-1">
            <div class="footer-main-wrapper-div-3">
            	<div class="footer-main-wrapper-div-4 text-style-6">Matara Beach Hotel Hotel<br />
            	  31 Beach Road, Kottegoda, Matara Sri Lanka
                  <br />
                  Phone: +94 719 670 759 <br />
              Fax: +94 719 670 759</div>
              <div class="footer-main-wrapper-div-5">
              	<div class="footer-main-wrapper-div-6"><a href="https://www.facebook.com/pages/Matara-BEACH-HOTEL/1207628705920241" target="_blank"><img src="http://www.galadarihotel.lk/_images/footer/facebook.gif" width="30" height="26" border="0" alt="" /></a><a href="http://twitter.com/GaladariHotel"><img src="http://www.galadarihotel.lk/_images/footer/twitter.gif" width="29" height="26" border="0" alt="" /></a><a href="http://www.flickr.com/photos/52296028@N07/sets/72157624476082911/"><img src="http://www.galadarihotel.lk/_images/footer/flicker.gif" width="28" height="26" border="0" alt="" /></a></div>
                <div class="footer-main-wrapper-div-7 text-style-6">&copy; Copyright 2015 Matara Beach Hotel Sri Lanka.<br> All rights reserved.<br />
              
			<!--    <a href="http://www.weblook.com" class="link4" target="_blank" style="text-decoration: none;">Web Design</a><img src="http://www.galadarihotel.lk/images/weblook-logo.png"> -->
			</div> 
			</div> 
			   
			   
              </div>
            </div>
            </div>
            </div>
<!-- *********** END the fotter**************************-->
<!--*****************************************************  -->


	
  </div>
</div>






					
</body>
<!--******************END BODY***********************************  -->

</html>