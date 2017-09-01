<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hartron Motors</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper" >

 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	<div class="container">
    <!-- Main Header -->
    <header class="main-header">
    	<div class="header-top">
        
            <div class="auto-container">
            	<div class="row clearfix">
                    <!--Logo-->
                    <div class="col-md-3 col-sm-3 col-xs-12 logo"><a href="index.php"><img src="images/logo1.png" alt="Carshire" title="Carshire"></a></div>
                    <div class="col-md-1 "></div>
                    <div class="col-md-3 col-sm-3 col-xs-12 logo pull-right"><a href="http://www.tatamotors.com/" target="_blank"><img src="images/tata-logo.jpg" alt="" title=""></a></div>
                    
                    <div class="col-lg-5 col-md-6 col-sm-10 header-top-infos">
                        <ul class="clearfix">
                            <li>
                                <div class="clearfix ">
<a href="workshop.php" style="color:#000">
                                    <img src="images/header-phone.png" alt="">
                                    <p><b style="color:red; font-size:23px;">Service</b> <br>9717174444</p>
</a>
                                </div>
                            </li> 
                            <li>
                                <div class="clearfix ">
<a href="showroom.php" style="color:#000">
                                    <img src="images/header-phone.png" alt="">
                                    <p><b style="color:red; font-size:23px;">Sales</b> <br>9971714444   </p>
</a>
                                 </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <!--Header Lower-->
		<div class="header-lower">
        	<div class="auto-container">
            	<div class="row clearfix">
                	<!--Main Menu-->
                    <nav class="col-md-12 col-sm-12 col-xs-12 main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li class="current "><a href="index.php">Home</a> </li>
                                <li><a href="about.php">About Us</a></li>
                                 
                                 <!--    <ul class="submenu">
                                        <li><a href="services.html">Services Style One</a></li>
                                        <li><a href="services-2.html">Services Style Two</a></li>
                                    </ul> -->
                                </li>
                                 <li class="dropdown"><a href="#">Find My Car</a>
                                    <ul class="submenu">
									<?php
											$res=mysqli_query($link,"SELECT DISTINCT * FROM car");
												while($row=mysqli_fetch_array($res))
												{?>
										     <li><a href="car.php?id=<?=$row['car_id']?>"><?=$row['car_name']?></a>
											 <input type="hidden" name="car_id"value="<?=$row['car_id']?>" ></li>
												<?php }?>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">On Road Price</a> 
								<ul class="submenu">
								<li><a href="delhi.php">Delhi Registration</a></li> 
								<li><a href="haryana.php">  Haryana Registration</a></li> 
								<li><a href="up.php">UP Registration</a></li> 
                                    </ul>
								</li>
                                <li  class="dropdown"><a href="#">Online Booking</a>
								<ul class="submenu">
								<li><a href="online-booking.php">Test Drive</a></li> 
								<li><a href="workshop.php">  Service</a></li> 
 
                                                              </ul>
								</li>
                               <li class=""><a href="showroom.php">Showroom</a> </li>
                                <li class=""><a href="workshop.php">Workshop</a> </li>
								
                                <li class=""><a href="career.php">Career</a> </li>
                                <li class=""><a href="contact.php">Contact Us</a> </li>
                            </ul>
                        </div>
                    </nav>
                    <!--Main Menu End-->
                  
                </div>
            </div>
        </div>
    </header>
	</div>
    <!--End Main Header -->

    <!-- Main Slider -->
    <section class="main-slider">
    
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider1.jpg"  data-saveperformance="off"  data-title="Awsome Service">
                    <img src="images/slider1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                   
                    </li>
                                        
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider3.jpg"  data-saveperformance="off"  data-title="Awsome Service">
                    <img src="images/slider3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                    </li>
                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider6.jpg"  data-saveperformance="off"  data-title="Professional Mechanics">
                    <img src="images/slider6.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- <div class="tp-caption lft tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="grey-title"><h2><strong>WE HEAR</strong> SMILE AND <strong>RAPAIR</strong></h2></div></div>
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="50"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="white-title"><h2>OUR GOAL IS SATISFACTION</h2></div></div> -->
                    
                    </li>
                     
                    
                    
                </ul>
                
                <div class="tp-bannertimer"></div>
                
            </div>
        </div>
	</section>

	    <div class="" style="background:url(images/bg.jpg);">
    <div class="container">
	<!--Why Us--> 
	 <section class="why-us">
		<div class="auto-container">
        	<div class="row clearfix">
            
            	<!--Text Content-->
                <div class="col-md-6 col-sm-12 col-xs-12 text-content">
                	<div class="title-box">
                    	<h3>Why you should choose TATA Motors?</h3>
                        <h4 class="theme-color">Take a look at our quality features</h4>
                    </div>
                    <div class="text">
                    	<p> 

Hartron Motors is the biggest TATA Motors Showroom in Gurugram and one of the biggest in Delhi NCR. Hartron Motors is a new entrant in the Automobile sector this is their 1st venture.

With a customer-centric approach, we have a strong culture of delivering real business results. We offer right skills assisting you in increasing efficiencies and establishing yourself as a reputed service provider. </p>


<p>We adopt an honest approach that enables us to extend our best services to our clients while enriching our relationships with them. Hartron strives to meet all your specific needs providing the best value for your money. </p>
					<img src="images/Tata-Motors-Logo.jpg">
                    </div>
                </div>
                
                <!--Tabs Side-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                	<div class="clearfix">
                        <div class="wow fadeInUp box" data-wow-delay="0ms" data-wow-duration="1000ms">
						
						<img src="images/2017-Tata-TIGOR-Sedan.jpg" class="img-responsive">
						</div>
						
                     </div>
                     
                </div>
            
            </div>
        </div>    
    </section>
	
    <!--Featured Services-->
    <section class="featured-services column-view">
		<div class="auto-container">
            
            <div class="sec-title">
                <h3>Popular Car Models of Tata Motors</h3>
            </div>
                        
        	<div class="row clearfix">
            	
                <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="inner-box">
                    	<figure class="image">
                        	<a href="tata-hexa.php"><img src="images/car1.jpg" alt="Image" title="Featured Service"></a>
                        </figure>
                        <div class="post-content clearfix">
                        	<h3 class="skew-lines">Tata Hexa</h3>
                            <div class="text-center"><a href="#" class="theme-btn btn-style-one"><span class="fa fa-angle-right"></span> GET A QUOTE</a></div>
                        </div>
                        
                        <div class="overlay-box">
                        	<h3 class="skew-lines">Tata Hexa</h3>
                            <div class="text">
                            	<p> Experience the power-packed, feature-loaded and adrenaline-pumped TATA Hexa on a specially created off-road track.</p>
                                
                                <a href="tata-hexa.php" class="theme-btn dark-btn style-two"><span class="fa fa-angle-right"></span> GET A QUOTE</a>
                            </div>
                        </div>
                        
                    </div>
                </article>
                
                <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="inner-box">
                    	<figure class="image">
                        	<a href="#"><img src="images/car2.jpg" alt="Image" title="Featured Service"></a>
                        </figure>
                        <div class="post-content clearfix">
                        	<h3 class="skew-lines">Genx Nano</h3>
                            <div class="text-center"><a href="tata-nano.php" class="theme-btn btn-style-one"><span class="fa fa-angle-right"></span> GET A QUOTE</a></div>
                        </div>
                        
                        <div class="overlay-box">
                        	<h3 class="skew-lines">Genx Nano purple</h3>
                            <div class="text">
                            	<p>Designed for the next generation, the GenX Nano Easy Shift  will take ease of driving to the next level with all of its advanced features.</p>
                                
                                <a href="tata-nano.php" class="theme-btn dark-btn style-two"><span class="fa fa-angle-right"></span> GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="inner-box">
                    	<figure class="image">
                        	<a href="#"><img src="images/car3.jpeg" alt="Image" title="Featured Service"></a>
                        </figure>
                        <div class="post-content clearfix">
                        	<h3 class="skew-lines">Tata Tiago</h3>
                            <div class="text-center"><a href="tata-tiago.php" class="theme-btn btn-style-one"><span class="fa fa-angle-right"></span> GET A QUOTE</a></div>
                        </div>
                        <div class="overlay-box">
                        	<h3 class="skew-lines">Tata Tiago</h3>
                            <div class="text">
                            	<p>The new zippy car, Tiago from Tata Motors. Innovative & fresh design language with cutting edge driving dynamics.</p>
                                
                                <a href="tata-tiago.php" class="theme-btn dark-btn style-two"><span class="fa fa-angle-right"></span> GET A QUOTE</a>
                            </div>
                        </div>
                    </div>
                </article>
				
				<article class="col-md-3 col-sm-6 col-xs-12 column-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<div class="inner-box">
                    	<figure class="image">
                        	<a href="tata-safari-strom.php"><img src="images/car4.jpg" alt="Image" title="Featured Service"></a>
                        </figure>
                        <div class="post-content clearfix">
                        	<h3 class="skew-lines">Tata Safari Storme</h3>
                            <div class="text-center"><a href="tata-safari-strom.php" class="theme-btn btn-style-one"><span class="fa fa-angle-right"></span> GET A QUOTE</a></div>
                        </div>
                        
                        <div class="overlay-box">
                        	<h3 class="skew-lines">Tata Safari Storme</h3>
                            <div class="text">
                            	<p>Generating tremors across the surface as its engine roars to life, it exudes class & finesse conquering every terrain.</p>
                                
                                <a href="tata-safari-strom.php" class="theme-btn dark-btn style-two"><span class="fa fa-angle-right"></span> GET A QUOTE</a>
                            </div>
                        </div>
                        
                    </div>
                </article>
                
            </div>
            
        </div>    
    </section>
	
    
    <!--Tabs Section-->
   

    <!--Main Footer-->
    <footer class="main-footer">
    	<!--Footer Upper-->
    	<div class="footer-upper">
        	<div class="auto-container">
            	<div class="row clearfix">
                	
                    <!--Footer Widget-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    	<div class="footer-widget contact-widget">
                        	<h3>Contact Us</h3>
                             <ul class="info">
                                <li><strong>Showroom</strong> <a href="javascript:void()" target="_blank">  Adjoining to Indian Oil Petrol Pump,<br>
                 Near Subhash Chowk, Vill. Islampur, Sohna Road,<br>
                 Gurugram-122003, Haryana</a></li>
                            	<li><strong>Email</strong> <a href="mailto:info@hartronmotors.com">info@hartronmotors.com</a></li>
                                <li><strong>Phone</strong> <span style="color:#fb4848">+91-9971714444</span></li>
                             </ul>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.62129143927!2d77.03396731507807!3d28.43068198249792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d187306e3b26f%3A0x911cb0b6e283db3a!2sTata+Motors+Showroom+-+Hartron+Motors!5e0!3m2!1sen!2sin!4v1495774410962" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <!--Footer Widget-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    	<div class="footer-widget services-widget">
                        	<h3>Contact Us</h3>
                             <ul class="info">
                                <li><strong>Workshop</strong> <a href="javascript:void()" target="_blank">  Plot No. 34, Sector-18, Industrial Estate, Gurugram-122008, Haryana, India.</a></li>
                            	<li><strong>Email</strong> <a href="mailto: service@hartronmotors.com"> service@hartronmotors.com</a></li>
                                <li><strong>Phone</strong> <span style="color:#fb4848">+91-9717174444</span></li>

                             </ul><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14027.850539718802!2d77.0561172!3d28.4806719!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x777e22ef3267e2f2!2sTata+Motors+Service+Center+-+Hartron+Motors!5e0!3m2!1sen!2sin!4v1495774705961" width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                
                    
                    <!--Footer Widget-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="footer-widget newsletter-widget">
                        	<h3>Quick Contact</h3>
                            <?php
							if(isset($_POST['submit']))
							{
								
								
								$name=$_POST['name'];
								$email=$_POST['email'];
								$mobile=$_POST['mobile'];
								
							
								
								$to = "info@hartronmotors.com";
							$subject = "Quick contact from Hartron Motors";
							
							$message = "
							<html>
							<head>
							<title>Contact Detail</title>
							</head>
							<body>
							
							<table>
							<p align='center'>Contact Detail</p>
							
							<tr>
							<th>Name</th><td>$name</td>
							</tr>
							<tr>
							<th>Email</th><td>$email</td>
							</tr>
							<tr>
							<th>Mobile</th><td>$mobile</td>
							</tr>
							
							</table>
							</body>
							</html>
							";
							
							// Always set content-type when sending HTML email
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
							
							// More headers
							$headers .= 'From: Hartron Motors<eazysoftech.com>' . "\r\n";
							
							if(mail($to,$subject,$message,$headers))
							{
								echo "<p style='color:#91f291;padding:5px;font-size:14px;'>Sent successfully</p>";
								//header("location:/destination.html?msg=success");
								header( "refresh:5;url=http://eazysoftech.com/car-dealer/index.php" );
							}
							else
							{
								echo "<p style='color:red;padding:5px;font-size:23px;'>Error in submitted</p>";
								header("refresh:5;url=http://eazysoftech.com/car-dealer/index.php");
							}
								
								
								
								
								
								}
							?>
                        	<form  class="clearfix" action="" method="post">
                        		<p><input type="text" name="name" required placeholder="Your Name"></p>
                        		<p><input type="text" name="email"  required  placeholder="Your Email"></p>
                        		<p><input type="text" pattern="[789][0-9]{9}" title="Only mobile number " name="mobile"  required  placeholder="Your Phone No."></p>
                         		<p><input class="hvr-bounce-to-right" type="submit" name="submit" value="Send Message" /></p>
                        	</form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
        	<div class="auto-container">

            	<div class="row clearfix">
                    <div class="col-md-6 col-sm-12 col-xs-12"><div class="copyright">Hartron Mortors LLP 2017. All rights reserved</div></div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="social-links">
                            <a href="#" class="fa fa-facebook-f"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-google"></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
</div>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
 
<!--End of Tawk.to Script-->


</body>
</html>
