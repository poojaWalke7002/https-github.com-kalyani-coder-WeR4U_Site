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

   $ClientName = $_GET['del'];

   $query = "DELETE FROM `client` WHERE ClientName = '$ClientName'";
   $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
   $count = mysqli_fetch_row($result);

  if($count == 0) {
      echo "<script>alert('Client deleted successfully.')
      window.location.href='allClients.php?success'</script>";
       
  }else{
      echo"<script>alert('Failed to delete client')
      window.location.href='allClients.php?fail'</script>";
  }
  
?>