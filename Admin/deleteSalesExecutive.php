<?php
 error_reporting(0);
 require('include/connection.php');
 session_start();

  if($_SESSION['user_name']=='')
  {
   header("location:index.php");
  }else
  {
    echo"";

  }

 $name = $_GET['del'];

 $query = "DELETE FROM salesExecutive WHERE name = '$name'";
 $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
 $count = mysqli_fetch_row($result);
if($count == 0)
{
  echo "<script>alert('sales Executive deleted successfully.')
  window.location.href='allSalesExecutives.php?success'</script>";
   
}
else{
	echo"<script>alert('Something error')
	window.location.href='allSalesExecutives.php?fail'</script>";
    }
?>