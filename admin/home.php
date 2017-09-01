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

                          <!--  <li> <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-edit"></i>  Car Details  <span class="fa arrow"></span></a>

                                    <ul class="nav-second-level nav" aria-expanded="true">

                                         <li><a href="on-road.php">On Road Price</a></li>

                                         <li><a href="exterior.php">Exterior</a></li>

                                         <li><a href="comfort.php">Comfort</a></li>

                                         <li><a href="safety-security.php">Safety & Security</a></li>

                                         <li><a href="tech-specs.php">Tech Specs</a></li>

                                         <li><a href="interior.php">Interior</a></li>

                                    </ul>

							   

							   </li> -->

                        <li><a href="car-variants.php"><i class="fa fa-edit"></i> Add Car Variants   </a></li> 

                            

 

 

                            </ul>

                        </div>

                    </div><!--Scrollbar wrapper-->

                </aside>

                <!--left navigation end-->



                <!-- START PAGE CONTENT -->

                <div id="page-right-content">



                    <div class="container">

                        <div class="row">

                            <div class="col-sm-12">

                                <h4 class="m-t-0 header-title">Welcome To Hartron Motors</h4>



                                <div class="table-responsive m-b-20">

                                   

								<!-- <div class="row m-b-20">

								<div class="col-sm-6">

								<div class="dataTables_filter">

								<label>Search:<input class="form-control input-sm" placeholder="" type="search"></label>

								</div>

								</div>

								</div>  -->

                                   <!--  <table id="datatable" class="table table-striped table-bordered">

                                        <thead>

                                        <tr>

                                            <th>Profile Image</th>

                                            <th>Name</th>

                                            <th>Email</th>

                                            <th>Bio / About</th>

                                            <th>Action</th>

                                         </tr>

                                        </thead>





                                        <tbody>

                                        

                                        

                                        <tr>

                                            <td> <img src="images/avatar-1.jpg" style="width:50px"> </td>

                                            <td>Member1</td>

                                            <td>info@gmail.com</td>

                                             <td>  Lorem Ipsum is simply dummy text. </td>

                                            <td><a class="btn btn-primary" href="#"  title="Edit Detail"><i class="fa fa-edit"></i></a><a href="#" class="btn btn-primary" title="Delete Member"><i class="fa fa-trash"></i></a></td>

                                         </tr>

                                        

                                        <tr>

                                            <td> <img src="images/avatar-1.jpg" style="width:50px"> </td>

                                            <td>Member1</td>

                                            <td>info@gmail.com</td>

                                             <td>  Lorem Ipsum is simply dummy text. </td>

                                            <td><a class="btn btn-primary" href="#"  title="Edit Detail"><i class="fa fa-edit"></i></a><a href="#" class="btn btn-primary" title="Delete Member"><i class="fa fa-trash"></i></a></td>

                                         </tr>

                                        

                                        <tr>

                                            <td> <img src="images/avatar-1.jpg" style="width:50px"> </td>

                                            <td>Member1</td>

                                            <td>info@gmail.com</td>

                                             <td>  Lorem Ipsum is simply dummy text. </td>

                                            <td><a class="btn btn-primary" href="#"  title="Edit Detail"><i class="fa fa-edit"></i></a><a href="#" class="btn btn-primary" title="Delete Member"><i class="fa fa-trash"></i></a></td>

                                         </tr>

                                        

 

                                        </tbody>

                                    </table> -->

                                </div>

                            </div>

                        </div>

                        </div> <!-- end container -->



                    <!-- <div class="footer">

                        <div class="text-center  hidden-xs">

                           All Right Reserved.

                        </div>

                         

                    </div> --> <!-- end footer -->



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