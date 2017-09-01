<?php 
session_start();
require_once("connection.php");
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Hartron Motors | Login</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <meta content=" " name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />



        <link rel="shortcut icon" href="images/favicon.ico">



        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->

        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Icons CSS -->

        <link href="css/icons.css" rel="stylesheet">

        <!-- Custom styles for this template -->

        <link href="css/style.css" rel="stylesheet">



    </head>





    <body style="background:url(images/map.jpg);background-size:cover">



        <!-- HOME -->

        <section>

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">



                        <div class="wrapper-page">



                            <div class="m-t-40 card-box">

                                <div class="text-center">

                                    <h2 class="text-uppercase m-t-0 m-b-30">

                                             Hartron Motors

                                     </h2>
 <?php            
						//require_once("connection.php");
						if(isset($_POST['submit']))
						{
							
							$Email=mysqli_real_escape_string($link,$_POST['Email']);
							$password=mysqli_real_escape_string($link,$_POST['password']);
							//echo "select * from admin where admin_user='".$Email."' and admin_password='".$password."' ";
							$q=mysqli_query($link,"select * from admin where admin_user='".$Email."' and admin_password='".$password."' ");
							//$f=mysqli_fetch_assoc($q);
							//print_r($f);
							$count=mysqli_num_rows($q);
							if($count>0)
							{
								$_SESSION['admin']=mysqli_fetch_assoc($q);
								//header("location:index.php");
								echo "<script>window.location = 'home.php';</script>";
							}
							else
							{
								echo "<p style='text-align:center;padding:6px 0px;color:#ff6d6d'>Your user or password are wrong</p>";
							}
							
						}
						?>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->

                                </div>

                                <div class="account-content">

                                    <form class="form-horizontal" action="" method="post">



                                        <div class="form-group m-b-20">

                                            <div class="col-xs-12">

                                                <label for="emailaddress">User Name</label>

                                                <input class="form-control" type="text" id="emailaddress" required="" placeholder="admin" name="Email">

                                            </div>

                                        </div>



                                        <div class="form-group m-b-20">

                                            <div class="col-xs-12">

                                               

                                                <label for="password">Password</label>

                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">

                                            </div>

                                        </div> 



                                        <div class="form-group account-btn text-center m-t-10">

                                            <div class="col-xs-12">
                      <input type="submit" class="btn btn-lg btn-primary btn-block"   value="Sign In" name="submit" />

                                            </div>

                                        </div>



                                    </form>



                                    <div class="clearfix"></div>



                                </div>

                            </div>

                            <!-- end card-box-->

 



                        </div>

                        <!-- end wrapper -->



                    </div>

                </div>

            </div>

        </section>

        <!-- END HOME -->







        <!-- js placed at the end of the document so the pages load faster -->

        <script src="js/jquery-2.1.4.min.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/metisMenu.min.js"></script>

        <script src="js/jquery.slimscroll.min.js"></script>



        <!-- App Js -->

        <script src="js/jquery.app.js"></script>



    </body>

</html>