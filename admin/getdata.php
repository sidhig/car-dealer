<?php 
session_start();
require_once("connection.php");
if(isset($_SESSION['admin']))
{

  if(isset($_POST['gofor']) && $_POST['gofor']=='get_modelbycar')
  {
	  $q=mysqli_query($link,"select * from car_model where model_car='".$_POST['id']."'");
	  $f=mysqli_fetch_assoc($q);
	  echo "<option value=''>select model</option>";
	  if($f['model_name'])
	  {
	  $model_name=explode("|",$f['model_name']);
	  //print_r($model_name);
	  
	  
	  for($i=0;$i<count($model_name);$i++)
      {
		
		echo "<option value='".$model_name[$i]."'>".$model_name[$i]."</option>";  
		  
		  
	  }
	  }
	  
  }















}
else
{
  header("location:index.php");
}
?>