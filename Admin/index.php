<?php  
 error_reporting(0);
 require('include/connection.php');
 session_start();

if (isset($_POST['username']) and isset($_POST['password'])){
      
  // Assigning POST values to variables.
  $user_name = $_POST['username'];
  $password = $_POST['password'];

  // CHECK FOR THE RECORD FROM TABLE
  $query = "SELECT * FROM `Admin` WHERE user_name = '$user_name' and password = '$password'";
   
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

if ($count == 1){
  
   $_SESSION['user_name'] = $user_name;
   echo" <script> window.location.href='home.php'</script>";

}else{
     
     echo"<script>alert('Invalid Login Credentials')
     window.location.href='index.php?fail'</script>"; 
     }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WeR4You-Industrial </title>
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
    <div class="page-holder d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><img src="img/illustration.svg" alt="" class="img-fluid"></div>
          </div>
          <div class="col-lg-5 px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">WeR4You-Industrial</h1>
            <h2 class="mb-4">Welcome back!</h2>

            <form id="loginForm" method="post" action="" class="mt-4">
              <div class="form-group mb-4">
                <input type="text" name="username" placeholder="Username or Email address" class="form-control border-0 shadow form-control-lg" required="">
              </div>
              <div class="form-group mb-4">
                <input type="password" name="password" placeholder="Password" class="form-control border-0 shadow form-control-lg text-violet" required="">
              </div>
              <div class="form-group mb-4">
                <div class="custom-control custom-checkbox">
                  <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                  <label for="customCheck1" class="custom-control-label">Remember Me</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary shadow px-5">Log in</button>
            </form>
          </div>
        </div>
     
      </div>
    </div>
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