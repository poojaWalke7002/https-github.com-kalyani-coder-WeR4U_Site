<?php  
 error_reporting(0);
 require('include/connection.php');
 session_start();

  if($_SESSION['user_name']=='')
  {
   header("location:index.php");
  }else{
    echo"";

  }

 $user_name = $_SESSION['user_name'];
 
 $query = "SELECT * FROM `client`";

 $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WeR4You-All Clients</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">
  </head>
  <body>
    <?php include 'include/header.php'; ?>
    <?php include 'include/sidebar.php'; ?>
    
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid">
          <section class="py-5">
                <div class="card">
                    <div class="card-header">
                     <center><h6 class="text-uppercase mb-0">All Clients</h6>
                     </center>
                    </div>
                  <?php
                  echo"<div class='card-body'>"; 
                  echo"<div class= 'table-responsive'>";                      
                  echo" <table class='table card-text'>";
                      echo"<thead>";
                        echo"<tr>";
                         echo" <th>Sr.No.</th>";
                          echo"<th>Client Name</th>";
                          echo"<th>Company Name</th>";
                          echo"<th>Start Date</th>";
                          echo"<th>End Date</th>";
                          echo"<th>Daily Allowed Emails</th>";
                          echo"<th>Active Status</th>";
                          echo"<th>Email Id</th>";
                          echo"<th>Contact No</th>";
                          echo"<th>Authentication Key</th>";
                          echo"<th>Daily Allowed SMS</th>";
                          echo"<th>Total Email Limit</th>";
                          echo"<th>Total SMS Limit</th>";
                          echo"<th>Send By Email Id</th>";
                          echo"<th>Delete</th>";
                        echo"</tr>";
                      echo"</thead>";
                      echo"<tbody>";
                      
                    $i=0;
             while ($retrive = mysqli_fetch_array($result)) 
                  {
                      $ClientName = $retrive['ClientName'];
                      $CompanyName = $retrive['CompanyName'];
                      $StartDate = $retrive['StartDate'];
                      $EndDate = $retrive['EndDate'];
                      $DailyAllowedEmails = $retrive['DailyAllowedEmails'];
                      $isActive = $retrive['isActive'];
                      $emailId = $retrive['emailId'];
                      $ContactNo = $retrive['ContactNo'];
                      $AuthenticationKey = $retrive['AuthenticationKey'];
                      $DailyAllowedSms = $retrive['DailyAllowedSms'];
                      $TotalEmailLimit = $retrive['TotalEmailLimit'];
                      $TotalSmsLimit = $retrive['TotalSmsLimit'];
                      $SendByEmailId = $retrive['SendByEmailId'];
                   
                      echo" <tr>";
                      echo"<th scope='row'>".$i = $i+1;"</th>";
                      echo"<td>$ClientName</td>";
                      echo"<td>$CompanyName</td>";
                      echo"<td>$StartDate</td>";
                      echo"<td>$EndDate</td>";
                      echo"<td>$DailyAllowedEmails</td>";
                      echo"<td>$isActive</td>";
                      echo"<td>$emailId</td>";
                      echo"<td>$ContactNo</td>";
                      echo"<td>$AuthenticationKey</td>";
                      echo"<td>$DailyAllowedSms</td>";
                      echo"<td>$TotalEmailLimit</td>";
                      echo"<td>$TotalSmsLimit</td>";
                      echo"<td>$SendByEmailId</td>";
                      
                      echo"<td><a href='deleteClient.php?del=$ClientName'<button class='btn btn-danger'>Delete</button></td>";
                      echo"</tr>";
                    }    
                      echo"</tbody>";
                    echo"</table>";
                    echo"</div>";
                  echo"</div>";
                  ?>
            </div>
          </section>
        </div>

  <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 text-center text-md-left text-primary">
          <p class="mb-2 mb-md-0">WeR4You-Industrial &copy; 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="js/front.js"></script>
</body>
</html>