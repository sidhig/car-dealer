<?php 
session_start();
require_once("connection.php");
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Hartron Motors | Admin</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <meta content=" " name="description" />

        <meta content=" " name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />



        <link rel="shortcut icon" href="images/favicon.ico">



        <!--Morris Chart CSS -->

		<link rel="stylesheet" href="css/morris.css">



        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->

        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Icons CSS -->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="css/icons.css" rel="stylesheet">

        <!-- Custom styles for this template -->

        <link href="css/style.css" rel="stylesheet">



    </head>





    <body>



        <div id="page-wrapper">



            <!-- Top Bar Start -->

            <div class="topbar">



                <!-- LOGO -->

                <div class="topbar-left">

                    <div class="">

                        <a href="#" class="logo">

                            <h2 class="logo-lg" >Hartron Motors</h2>

                            <h2 class="logo-sm hidden"> </h2>

                        </a>

                    </div>

                </div>



                <!-- Top navbar -->

                <div class="navbar navbar-default" role="navigation">

                    <div class="container">

                        <div class="">



                            <!-- Mobile menu button -->

                            <div class="pull-left">

                                <button type="button" class="button-menu-mobile visible-xs visible-sm">

                                    <i class="fa fa-bars"></i>

                                </button>

                                <span class="clearfix"></span>

                            </div>



                            <!-- Top nav left menu -->

                          <!--  -->



                            <!-- Top nav Right menu -->

                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">

                               <!--  <li class="hidden-xs">

                                    <form role="search" class="navbar-left app-search pull-left">

                                         <input type="text" placeholder="Search..." class="form-control">

                                         <a href=""><i class="fa fa-search"></i></a>

                                    </form>

                                </li> -->

                              



                                <li class="dropdown top-menu-item-xs">

                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="images/user1.png" alt="user-img" class="img-circle"> </a>

                                    <ul class="dropdown-menu"> 

                                      <!--   <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li> -->

                                         <li><a href="logout.php"><i class="fa  fa-power-off m-r-10"></i> Logout</a></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                    </div> <!-- end container -->

                </div> <!-- end navbar -->

            </div>

            <!-- Top Bar End -->





            <!-- Page content start -->

            <div class="page-contentbar">



                <!--left navigation start-->

                <aside class="sidebar-navigation">

                    <div class="scrollbar-wrapper">

                        <div>

                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">

                                <i class="fa fa-close"></i>

                            </button>

                            <!-- User Detail box -->

                            <div class="user-details">

                                <div class="pull-left">

                                    <img src="images/user1.png" alt="" class="thumb-md img-circle">

                                </div>

                                <div class="user-info">

                                    <a href="#">Admin</a>

                                    <p class="text-muted m-0">Hartron Motors</p>

                                </div>

                            </div>

                            <!--- End User Detail box -->



                            <!-- Left Menu Start -->

                            <ul class="metisMenu nav" id="side-menu">

                                <li><a href="home.php"><i class="fa fa-home"></i> Dashboard </a></li>

                                <li><a href="car.php"><i class="fa fa-car"></i> Enter Car </a></li>

                                <li><a href="car-model.php"><i class="fa fa-car"></i> Enter Car Model </a></li>

                          <li><a href="car-variants.php"><i class="fa fa-edit"></i> Add Car Variants   </a></li> 

                         <!-- <li><a href="advertisement.php"><i class="fa fa-bullhorn"></i> Advertisement   </a></li> -->

                            

 

 

                            </ul>

                        </div>

                    </div><!--Scrollbar wrapper-->

                </aside>

                <!--left navigation end-->



                <!-- START PAGE CONTENT -->

                <div id="page-right-content">



                    <div class="container">

                         <div class="row">

                                        <form class="form-horizontal" role="form">

                                    <div class="col-md-12">

					<h4 class="m-t-0 header-title">Car Detail</h4>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Select Car</label>

												<div class="col-md-9">

                                                     <select class="form-control" name="car" id="car" required>

                                                        <option value="">select Car</option> 
                                                       <?php 
													   $q=mysqli_query($link,"select * from car");
													   while($f=mysqli_fetch_assoc($q))
													   {
													    ?>
                                                        <option value="<?php echo $f['car_id']; ?>"><?php echo $f['car_name']; ?></option> 
                                                       <?php 
													   }
													   ?>
                                                       

                                                    </select>

                                                </div>

                                            </div>

											

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Select City</label>

												<div class="col-md-9">

                                                     <select class="form-control">

                                                        <option>Delhi</option>  

                                                        <option>Bangalore</option>  

                                                        <option>Pune</option>  

                                                    </select>

                                                </div>

                                            </div>

                                             <div class="form-group">

									<label class="col-sm-3 control-label">Select Car Model</label>

 												<div class="col-md-9">

                                                     <select class="form-control" id="car_model">

                                                   

                                                    </select>

                                                </div>

                                            </div>

 											

							<h4 class="m-t-0 header-title">Variants</h4>

					<div class="row">

                                        <div class="col-lg-12">

                                            <div class="card-box">

 

                                                <ul class="nav nav-tabs">

                                                    <li class="active">

                                                        <a href="#road" data-toggle="tab" aria-expanded="false">

                                                            <span class="visible-xs"><i class="fa fa-home"></i></span>

                                                            <span class="hidden-xs">On Road Price</span>

                                                        </a>

                                                    </li>

                                                    <li class="">

                                                        <a href="#exterior" data-toggle="tab" aria-expanded="true">

                                                            <span class="visible-xs"><i class="fa fa-user"></i></span>

                                                            <span class="hidden-xs">Exterior</span>

                                                        </a>

                                                    </li>

                                                    <li class="">

                                                        <a href="#comfort" data-toggle="tab" aria-expanded="false">

                                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>

                                                            <span class="hidden-xs">Comfort</span>

                                                        </a>

                                                    </li>

                                                    <li class="">

                                                        <a href="#security" data-toggle="tab" aria-expanded="false">

                                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>

                                                            <span class="hidden-xs">Safety & Security</span>

                                                        </a>

                                                    </li>

                                                    <li class="">

                                                        <a href="#specs" data-toggle="tab" aria-expanded="false">

                                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>

                                                            <span class="hidden-xs">Tech Specs</span>

                                                        </a>

                                                    </li>

                                                    <li class="">

                                                        <a href="#interior" data-toggle="tab" aria-expanded="false">

                                                            <span class="visible-xs"><i class="fa fa-cog"></i></span>

                                                            <span class="hidden-xs">Interior</span>

                                                        </a>

                                                    </li>

                                                </ul>

                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="road">

                                                        <div class="form-group">

                                                <label class="col-sm-3 control-label">Ex-Showroom Price</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Emission Norms </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Insurance </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Registration + LifeTax </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Logistics Charges </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Extended Warranty </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">AMC </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Basic Accessories</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">On Road Price Total </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" " class="form-control">

                                                </div>

                                            </div>

                                                    </div>

                                                    <div class="tab-pane" id="exterior">

                                                       <div class="form-group">

                                                <label class="col-sm-3 control-label">19" Machined-cut Alloy Wheels</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Front Fog Lamps</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

											

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Daytime Running Lights(DRL)</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Dual Coloured Bumpers</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Muscular Body Claddings</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Tata Signature Front Grille with Chrome Humanity Line</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Black-out Door Frame</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Integrated Rear Spoiler</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Front & Rear Bumper Skid Plates</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Chrome Plated Twin Exhausts</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Tailgate Applique</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  <div class="form-group">

                                                <label class="col-sm-3 control-label">Body coloured outside door handles</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Body coloured ORVM</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Rear Luggage step Plate</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

											<div class="form-group">

                                                <label class="col-sm-3 control-label">Floating Roof</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Rear Luggage step Plate</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                          

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Rear Fog Lamps</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Smoked Projector Headlamps</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Wraparound LED Tail Lamps</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Chrome Door Belt Line with Hexa Shark Fin Branding</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                                    </div>

                                                    <div class="tab-pane" id="comfort">

                                                        <div class="form-group">

								 <label class="col-sm-3 control-label">Power Steering </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>  

								 

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Remote Centrol Locking</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> ORVM Demister</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Rear Wiper & Wash </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Front Centre Armrest with Storage</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">All Power Windows </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Power Foldable ORVMs </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Remote Tailgate & Fuel Lid Opening </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">All Express-down Windows </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Power Adjustable ORVMs </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Rear Defogger</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Rain Sensing Wipers </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Adjustable Tilt Steering </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Power Window Operation-3 Mins after Ignition off </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">8-Way Adjustable Driver Seat </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Automatic Headlamps (Light Sensing) </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Height Adjustable Seatbelts(Driver+Co-driver) </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Fully Automatic temperature Control (FATC) with Dual HVAC </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Seating Capacity </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Rear Centre Armrest with Cup Holders(7 Seater)</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Cruise Control</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Follow Me Home Headlamps </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Rear AC Vents on Pillars (2nd & 3rd Row) with Blower Speed Control </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">12V Power Outlets </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> 2nd Row Seats</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Reverse Parking Camera </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Puddle Lamps on Doors </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Retractable Windows Sunblinds (2nd Row) </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Reverse Parking Sensor </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> 3rd Row Seats (50:50 Foldable Split)</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Cooled & Illuminated Upper Glovebox </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Sunglass Holder</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Can Holders in 2nd & 3rd Row</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Bottle Holder & Magazine Pockets in all Doorss </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label"> Smart USB Charging (2nd Row)</label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

							  <div class="form-group">

								 <label class="col-sm-3 control-label">Rear AC Vents on Floor Console </label>

								 <div class="col-md-9">

								 <input type="text" placeholder="" class="form-control">

								 </div>

								 </div>

                                                    </div>

                                                    <div class="tab-pane" id="security">

                                                        <div class="form-group">

                                                <label class="col-sm-3 control-label">Perimetric alarm system </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Driver and Co-Passenger airbags </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">ABS(with EBD) </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Child Safety Lock</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                                    </div>

													<div class="tab-pane" id="specs">

                                                         <div class="form-group">

                                                <label class="col-sm-3 control-label">Brakes Rear </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Length (mm)</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Turning Circle Radius (mtrs) </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Wheel type & tyre size </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Tyres Type </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Seating Capacity </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Engine Type </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Width (mm)</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Fuel Tank Capacity (litres) </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Transmission </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Height (mm)</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Maximum Power</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Wheel base (mm) </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Ground Clearance (mm) </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Maximum Torque </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Emission norm</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> capacity,Cylinders</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Suspension Front</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> All Wheel Drive(AWD)</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                          

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Suspension Rear </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                           

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Brakes Front </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                                    </div> 

													<div class="tab-pane" id="interior">

                                                        <div class="form-group">

                                                <label class="col-sm-3 control-label">Gear Shift Knob with Chrome Inserts</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">ConnectNext Infotainment System by Harman</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">AM/FM, USB, AUX IN,iPod Connectivity</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Bluetooth Connectivity</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Voice Command Recognition & SMS Read-out</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Seat Upholstery</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Chrome Inner Door Handles</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Premium Sporty Black Interiors </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

											 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Speaker System</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">ConnectNext Touchscreen Infotainment System by Harman</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Soft-touch Dashboard with Hexa Branding</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Illuminated Ring around Ignition Key Slot</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

											 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Steering Mounted Controls</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Leather Wrapped Steering Wheel</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">AM/FM, USB, AUX IN,iPod Connectivity</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

											 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Speed Dependent Volume Control</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Door Trim Inserts</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Front & Rear Cabin Lamp with 2 Spotlights </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Metallic Scuff Plates with Hexa Branding </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>  

											 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">USB/SD Card Video Playback & Image Viewer</label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" class="form-control">

                                                </div>

                                            </div>

                                                    </div> 

													 

                                                </div>

                                            </div>

                                        </div> <!-- end col -->

 

                                    </div>

                                          

                                        

                                    </div> 

									<div class="clearfix"></div>

									<div class="col-md-9 col-md-offset-3">

									<button type="submit" class="btn btn-primary">Submit</button>

									</form>

									</div>



                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                

                        </div> <!-- end container -->

 

                </div>

                <!-- End #page-right-content -->



            </div>

            <!-- end .page-contentbar -->

        </div>

        <!-- End #page-wrapper -->







        <!-- js placed at the end of the document so the pages load faster -->

        <script src="js/jquery-2.1.4.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/metisMenu.min.js"></script>

        <script src="js/jquery.slimscroll.min.js"></script>



        <!--Morris Chart-->

		<script src="js/morris.min.js"></script>

		<script src="js/raphael-min.js"></script>



        <!-- Dashboard init -->

		<script src="js/jquery.dashboard.js"></script>



        <!-- App Js -->
<script>
$(function(){
$('#car').change(function(){
	//alert(55);
	var car_id=$('#car').val();
	$.ajax({
		    url:"getdata.php",
			type:"post",
			data:{'gofor':'get_modelbycar','id':car_id},
			success: function(response){
				//alert(response);
				$('#car_model').html(response);
				}
	});
 });

});
</script>
        <script src="js/jquery.app.js"></script>



    </body>

</html>
<?php
}
else
{
  header("location:index.php");
}
?>