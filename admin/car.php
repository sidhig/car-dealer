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

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css
" />



    
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

                                    
      <div class="col-md-6">
      <h4 class="m-t-0 header-title">Enter Car Name</h4>
       <?php 
						   if(isset($_POST['Submit']))
						   {
						     $car_name=$_POST['car_name'];
						     foreach($car_name as $key=>$data)
							 {
							
							
						   $q=mysqli_query($link,"Insert into car(`car_id`,`car_name`) values(null,'".$data."')");
							
							 }
						   if($q)
							{
								echo "<p style='text-align:center;padding:6px 0px;color:lime'>You have inserted successfully</p>";
							}
							else
							{
								echo "<p style='text-align:center;padding:6px 0px;color:red'>Error in registration</p>";
							}
						   }
						   
						   
						if(isset($_GET['id']))
						{
						  $sq=mysqli_query($link,"select * from car where car_id='".$_GET['id']."'");
						  $result=mysqli_fetch_assoc($sq);
						}  
						if(isset($_GET['id']) && $_GET['type']=='delete')
						{
						  $dq=mysqli_query($link,"delete from car where car_id='".$_GET['id']."'");
						 if($dq)
							{
								echo "<p style='text-align:center;padding:6px 0px;color:lime'>You have deleted successfully</p>";
								//header( "refresh:5;url=car.php" );
								echo "<script>setTimeout(function () {
   window.location.href= 'http://eazysoftech.com/car-dealer/admin/car.php'; // the redirect goes here

},1000);</script>";
							}
							else
							{
								echo "<p style='text-align:center;padding:6px 0px;color:red'>Error in deletion</p>";
							}
						}
						
						 
						if(isset($_POST['update']))
						   {
						     $car_name=$_POST['car_name'];
							 foreach($car_name as $key=>$data)
							 {
							  $q=mysqli_query($link,"Update car set car_name='".$data."' where car_id='".$_GET['id']."'");
							
							 }
						   if($q)
							{
								echo "<p style='text-align:center;padding:6px 0px;color:lime'>You have updated successfully</p>";
								//header( "refresh:5;url=car.php" );
								echo "<script>setTimeout(function () {
   window.location.href= 'http://eazysoftech.com/car-dealer/admin/car.php'; // the redirect goes here

},4000);</script>";
							}
							else
							{
								echo "<p style='text-align:center;padding:6px 0px;color:red'>Error in updation</p>";
							}
							 }
						   ?>
      <form class="form-horizontal" role="form" method="post" action="">
             <div id="data">
             <div class="form-group">

                <div class="col-md-12">
                <input type="text" class="form-control" name="car_name[]" value="" required placeholder="Tata hexa">

                 </div>
                
                </div> 
              </div>  
                                                
                <div class="form-group">
                 <?php 
				 if(!isset($_GET['id']))
						{
				 ?>
                <button type="button" onClick="add_more()" class="btn btn-primary">Add more</button>
                <?php } ?>
                </div>  
                
                
          <?php 
				 if(!isset($_GET['id']))
						{
				 ?>                            
     <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
<?php } else{ ?>
      <input type="submit" class="btn btn-primary" name="update" value="Update">
     
<?php } ?>
                                        </form>

       </div>

                                </div>
		
		<div class="row">
        <h4 class="m-t-0 header-title">Car Details</h4>
                                    
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Car Name</th>
				<th>Created Date</th>
				<th>Updated Date</th>
                <th>Action</th>
               
            </tr>
        </thead>
       
        <tbody>
		<?php 
		$i=1;
		$q=mysqli_query($link,"select * from car");
		while($f=mysqli_fetch_assoc($q))
		{
		?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $f['car_name']; ?></td>
				<td><?php echo date("d-m-Y h:i:s a",strtotime($f['car_created'])); ?></td>
				<td><?php echo date("d-m-Y h:i:s a",strtotime($f['car_updated'])); ?></td>
                <td> <a href="car.php?id=<?php echo $f['car_id']; ?>" class="btn btn-primary ml30">Edit</a>
				<a href="car.php?id=<?php echo $f['car_id']; ?>&type=delete" class="btn btn-primary ml30"> Delete</a> </td>
                
            </tr>
      <?php 
	  $i++;
	  }
	  ?>      
			</tbody>
			</table>
			
			
			


                                  <!--   <div class="col-md-6">

									<h4 class="m-t-0 header-title">Specification Category</h4>

                                        <form class="form-horizontal" role="form">

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div> 

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div>  

                                            <div class="form-group">

                                                 <div class="col-md-10">

                                                    <input type="text" class="form-control" placeholder="On Road Price">

                                                </div>

                                            </div>  

                                        </form>

                                    </div> -->



                                </div>
          
                        </div> <!-- end container -->

 

                </div>

                <!-- End #page-right-content -->



            </div>

            <!-- end .page-contentbar -->

        </div>

        <!-- End #page-wrapper -->




<style>
.addn{    float: right;
    position: absolute;
    margin: 9px;
	color:red}
	.addn:hover{cursor:pointer; text-decoration:underline;}
</style>
<script>
  var i=1;
  function remove(r)
  {
	 $('#d'+r).remove(); 
  }
  function add_more()
  {
	  
	$('#data').append("<div class='form-group' id='d"+i+"'><div class='col-md-12'><input type='text' class='form-control' name='car_name[]' placeholder='Tata hexa'></div><span class='addn' onclick='remove("+i+")'>Remove</span></div>"); 
	i++; 
  }
 
 
</script>

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

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    </body>

</html>
<?php
}
else
{
  header("location:index.php");
}
?>