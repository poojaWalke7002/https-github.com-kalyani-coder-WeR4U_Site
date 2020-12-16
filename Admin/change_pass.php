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

  $user_name = $_SESSION['user_name'];

if(isset($_POST['submit'])){
     //for match newPass and confirmPass
   if($_POST["newPassword"] !== $_POST["confirmPassword"]){
      echo" <script>alert('New password and confirmed password must be same!')
            window.location.href='change_pass.php?fail'</script>";

   }else{
        //fetch pass
         $result = mysqli_query($connection,"SELECT * from Admin WHERE user_name ='" . $user_name . "'") or die(mysqli_error($connection));
         $row = mysqli_fetch_array($result);

            if($_POST["currentPassword"] == $row["password"]){
              //update password
              $result = mysqli_query($connection,"UPDATE Admin set password = '" . $_POST["newPassword"] . "' WHERE user_name ='" . $user_name . "'");
             
                    echo" <script>alert('Password succssesfully updated!')
                    window.location.href='home.php?success'</script>";
          
            }else{
                  echo" <script>alert('Incorrect password!')
                  window.location.href='change_pass.php?fail'</script>";
                 }
        }
}

mysql_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WeR4You-change password </title>
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
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                   <center><h3 class="h6 text-uppercase mb-0">Change Password</h3></center>
                  </div>
                  <div class="card-body">
                  <form id="change_pass" method="post" action="" class="mt-4">
                  
                  <div class="form-group">
                    <label class="form-control-label">Current Password:</label>
                    <input type="password" name="currentPassword" placeholder="Current Password" class="form-control" value='' required="">
                  </div> 
                  
                  <div class="form-group">
                    <label class="form-control-label">New Password:</label>
                    <input type="password" name="newPassword" placeholder="New Password" class="form-control" value='' required="">
                  </div> 
                  
                  <div class="form-group">
                    <label class="form-control-label">Confirm Password:</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control" value='' required="">
                  </div> 
                  
                  <center>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </center>
              
              </form>

                  </div>
                </div>
              </div>

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