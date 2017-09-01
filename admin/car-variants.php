<?php 
session_start();
require_once("connection.php");
if(isset($_SESSION['admin']))
{
 if(!empty($_POST))
                           {
                            
                          
                           
                             $cv_car=$_POST['car_type'];
                            $cv_model=$_POST['car_model'];
                            $cv_city=$_POST['car_city'];
                            $cv_fuel=$_POST['car_fuel'];
                            
                            $cv_orp_ic=$_POST['cv_orp_ic'];
                            $cv_orp_esrp=$_POST['cv_orp_esrp'];
                            $cv_orp_en=$_POST['cv_orp_en'];
                            $cv_orp_rlt=$_POST['cv_orp_rlt'];
                            $cv_orp_lc=$_POST['cv_orp_lc'];
                            $cv_orp_ew=$_POST['cv_orp_ew'];
                            $cv_orp_amc=$_POST['cv_orp_amc'];
                            $cv_orp_ba=$_POST['cv_orp_ba'];
                            $cv_orp_total=$_POST['cv_orp_total'];
                            $cv_exterior_bcodh=$_POST['cv_exterior_bcodh'];
                            $cv_exterior_dcb=$_POST['cv_exterior_mbc'];
                            $cv_exterior_bc_orvm=$_POST['cv_exterior_bc_orvm'];
                           
                            
                               $q=mysqli_query($link,"Insert into  car_variant(`cv_car`, `cv_city`, `cv_model`, `cv_fuel`,`cv_orp_esrp`, `cv_orp_en`, `cv_orp_rlt`, `cv_orp_lc`, `cv_orp_ew`, `cv_orp_amc`, `cv_orp_ba`, `cv_orp_total`,  `cv_exterior_dcb`, `cv_exterior_mbc`,`cv_exterior_bcodh`, `cv_exterior_bc_orvm`,`cv_orp_ic`) values('".$cv_car."','".$cv_city."','".$cv_model."','".$cv_fuel."','".$cv_orp_esrp."','".$cv_orp_en."','".$cv_orp_rlt."','".$cv_orp_lc."','".$cv_orp_ew."','".$cv_orp_amc."','".$cv_orp_ba."','".$cv_orp_total."','".$cv_exterior_dcb."','".$cv_exterior_dcb."','".$cv_exterior_bcodh."','".$cv_exterior_bc_orvm."','".$cv_orp_ic."')");
                        
                          /* if($q)
                            {
                                echo '<p style='text-align:center;padding:6px 0px;color:lime'>You have inserted successfully</p>';
                            }
                            else
                            {
                                echo "<p style='text-align:center;padding:6px 0px;color:red'>Error in registration</p>";
                            }*/
                           }
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

                                        <form class="form-horizontal" role="form" method="post">

                                    <div class="col-md-12">

					<h4 class="m-t-0 header-title">Car Detail</h4>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Select Car</label>

												<div class="col-md-9">

                                                     <select class="form-control" name="car_type" id="car_type" required>

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

                                                     <select class="form-control" name=" car_city" id="car_city">

                                                        <option value="1">Delhi</option>  

                                                        <option value="2">Bangalore</option>  

                                                        <option value="3" >Pune</option>  

                                                    </select>

                                                </div>

                                            </div>
                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Select Fuel Type</label>

												<div class="col-md-9">

                                                     <select class="form-control" name="car_fuel" id="car_fuel">

                                                        <option>Select</option>  
                                                        <option value="1">Petrol</option>  

                                                        <option value="2"> Diesel</option>  

 
                                                    </select>

                                                </div>

                                            </div>

                                             <div class="form-group">

									<label class="col-sm-3 control-label">Select Car Model</label>

 												<div class="col-md-9">

                                                     <select class="form-control" id="car_model" name="car_model">

                                                   
                                                       <option value="">select model</option> 
                                                       <?php 
													   $query=mysqli_query($link,"select * from car_model");
													   while($result=mysqli_fetch_assoc($query))
													   {
													    ?>
                                                        <option value="<?php echo $result['model_car']; ?>"><?php echo $result['model_name']; ?></option> 
                                                       <?php 
													   }
													   ?>
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

                                                            <span class="hidden-xs">Showroom Price</span>

                                                        </a>

                                                    </li>

                                                   

                                                </ul>

                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="road">

                                                        <div class="form-group">

                                                <label class="col-sm-3 control-label">Ex-Showroom Price</label>

												<div class="col-md-9">

                                                     <input type="text" value="" name="cv_orp_esrp" placeholder="" class="form-control">

                                                </div>

                                            </div>
 
                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Emission Norms </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder=" "  name="cv_orp_en" value="" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Insurance </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=" " name="cv_orp_ic" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Registration + LifeTax </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=" " name="cv_orp_rlt" class="form-control">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Logistics Charges </label>

												<div class="col-md-9">

                                                     <input type="text"   value="" placeholder=" " name="cv_orp_lc" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">Extended Warranty </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=" " name="cv_orp_ew" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">AMC </label>

												<div class="col-md-9">

                                                     <input type="text"   value="" placeholder=" " name="cv_orp_amc" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label"> Basic Accessories</label>

												<div class="col-md-9">

                                                     <input type="text" value="" placeholder=" " name="cv_orp_ba" class="form-control">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <label class="col-sm-3 control-label">On Road Price Total </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=" " name="cv_orp_total" class="form-control">

                                                </div>

                                            </div>

                                                    </div>

                                                    <div class="tab-pane" id="exterior">

                                                       <div class="form-group">

                                                <label class="col-sm-3 control-label">Body coloured outside door handles </label>

												<div class="col-md-9">

                                                     <input type="text" placeholder="" name="cv_exterior_bcodh" class="form-control">

                                                </div>

                                            </div> 
 
                                                       <div class="form-group">

                                                <label class="col-sm-3 control-label">Body coloured ORVM </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=""  name="cv_exterior_bc_orvm" class="form-control">

                                                </div>

                                            </div> 
 
                                                       <div class="form-group">

                                                <label class="col-sm-3 control-label">Dual Coloured Bumpers </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder="" name="cv_exterior_dcb" class="form-control">

                                                </div>

                                            </div> 
                                                       <div class="form-group">

                                                <label class="col-sm-3 control-label">Muscular Body Claddings </label>

												<div class="col-md-9">

                                                     <input type="text"  value="" placeholder=""  name="cv_exterior_mbc" class="form-control">

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