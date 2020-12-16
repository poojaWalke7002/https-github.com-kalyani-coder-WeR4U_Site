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
  if(isset($_POST['submit'])){
      
  // Assigning POST values to variables.
  $clientName = $_POST['client-name'];
  $companyName = $_POST['company-name'];
  $startDate = $_POST['start-date'];
  $endDate = $_POST['end-date'];
  $allowedEmails = $_POST['daily-allowed-emails'];
  $activeStatus = $_POST['active-status'];
  $emailId = $_POST['email-id'];
  $password = $_POST['password'];
  $contactNo = $_POST['contact-no'];
  $authenticationKey = $_POST['authentication-key'];
  $allowedSms = $_POST['daily-allowed-sms'];
  $emailLimit = $_POST['total-email-limit'];
  $smsLimit = $_POST['total-sms-limit'];
  $sendBy = $_POST['send-by-email-id'];

  // INSERT RECORD 
  $query=("INSERT INTO `client` (`ClientName`, `CompanyName`, `StartDate`, `EndDate`, `DailyAllowedEmails`, `isActive`, `emailId`, `Password`, `ContactNo`, `AuthenticationKey`, `DailyAllowedSms`, `TotalEmailLimit`, `TotalSmsLimit`, `SendByEmailId`) VALUES ('$clientName','$companyName','$startDate','$endDate','$allowedEmails','$activeStatus','$emailId','$password','$contactNo','$authenticationKey','$allowedSms','$emailLimit','$smsLimit','$sendBy')");
   
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

if ($count == 0){
   echo" <script>window.location.href='allClients.php?success'</script>";

}else{
     
     echo"<script>alert('Errors in adding new client')
     window.location.href='addClient.php?fail'</script>"; 
     }
}

mysql_close($connection);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WeR4You-Add Client </title>
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
                   <center><h3 class="h6 text-uppercase mb-0">Add New Client</h3></center>
                  </div>
                  <div class="card-body">
                  <form id="add-client" method="post" action="" class="mt-4">
                   <div class="form-group">
                    <label class="form-control-label">Client Name:</label>
                    <input type="text" name="client-name" placeholder="Client Name" class="form-control" value='' required="">
                  </div> 
                  <div class="form-group">
                    <label class="form-control-label">Company Name:</label>
                    <input type="text" name="company-name" placeholder="Company Name" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Start Date:</label>
                    <input type="datetime-local" name="start-date" placeholder="Start Date" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">End Date:</label>
                    <input type="datetime-local" name="end-date" placeholder="End Date" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Daily Allowed Emails:</label>
                    <input type="number" name="daily-allowed-emails" placeholder="Daily Allowed Emails" class="form-control" value='' required="">
                  </div> 
                  <div class="form-group">
                    <label class="form-control-label">Active Status:</label>
                    <input type="text" name="active-status" placeholder="Active Status" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Email Id:</label>
                    <input type="email" name="email-id" placeholder="Email Id" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Password:</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Contact No:</label>
                    <input type="text" name="contact-no" placeholder="Contact No" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Authentication Key:</label>
                    <input type="text" name="authentication-key" placeholder="AuthenticationKey" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Daily Allowed SMS:</label>
                    <input type="number" name="daily-allowed-sms" placeholder="Daily Allowed SMS" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Total Email Limit:</label>
                    <input type="number" name="total-email-limit" placeholder="Total Email Limit" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Total SMS Limit:</label>
                    <input type="number" name="total-sms-limit" placeholder="Total SMS Limit" class="form-control" value='' required="">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Send By Email Id:</label>
                    <input type="email" name="send-by-email-id" placeholder="Send By Email Id" class="form-control" value='' required="">
                  </div>
                  <center>
                    <div class="form-group">
                      <button type="submit" name="submit" class="btn btn-primary">Add </button>
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