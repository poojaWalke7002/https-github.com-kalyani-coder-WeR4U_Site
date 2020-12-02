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
      
    // Assigning POST values to variables.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    // INSERT RECORD IN THE TABLE PRODUCTS
    $query = ("UPDATE salesExecutive SET name = '$name',email = '$email',mobile = '$mobile',city = '$city' WHERE name = '$user_name'");
     
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

  if ($count == 0){
       echo"<script>alert('Profile succssesfully updated')
       window.location.href='salesExecutiveDashboard.php?success'</script>";
     }else{
       echo"<script>alert('Failed to update profile!
       window.location.href='update_profile.php?fail'</script>"; 
     }
}

 mysql_close($connection);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WeR4You-Update Profile </title>
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

  <div class="col-lg-12 mb-5" >
                <div class="card">
                  <div class="card-header">
                   <center><h3 class="h6 text-uppercase mb-0">Update Profile</h3></center>
                  </div>
                  <div class="card-body">
                  <form id="add-sales-executive" method="post" action="" class="mt-4">
                   <div class="form-group">
                    <label class="form-control-label">Name:</label>
                    <input type="text" name="name" placeholder="Name" class="form-control" value='' required="">
                  </div> 
                  <div class="form-group">
                    <label class="form-control-label">Email:</label>
                    <input type="email" name="email" placeholder="Email ID" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Mobile:</label>
                    <input type="tel" name="mobile" placeholder="Mobile No" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">City:</label>
                    <input type="text" name="city" placeholder="City" class="form-control" value='' required="">
                  </div>
                  <center>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Update</button>
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