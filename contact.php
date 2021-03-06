<?php  
 error_reporting(0);
 require('include/connection.php');

  if(isset($_POST['submit'])){    
  // Assigning POST values to variables
  $name = $_POST['name'];
  $service = $_POST['service'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $message = $_POST['message'];

  // INSERT RECORD
  $query=("INSERT INTO `contactus` (Name,Service,Email,PhoneNo,State,District,Message) VALUES ('$name','$service','$email','$phone_no','$state','$district','$message')");
   
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);

  if ($count == 0){
   echo"<script>alert('Message sent successfully!')
        window.location.href='index.html?success'</script>";

  }else{
     
     echo"<script>alert('Something went wrong!')
     window.location.href='contact.php?fail'</script>"; 
     }
}

mysql_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>WeR4U Industrial solutions-Contact Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
            <div class="dropdown">

                <h2 style="color: rgb(255, 255, 255);"> <i class="fa fa-line-chart"></i>
                    <i>WeR4U solutions</i></h2>

                <div class="dropdown-content">
                    <a href="index.html">Home</a>
                    <a href="#approach">Approach</a>
                    <a href="#about">About Us </a>
                    <a href="#gallery">Gallery </a>

                </div>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="Projects.html" class="nav-link">Consultancy</a>
                    </li>
                    <li class="nav-item">
                        <a href="Services.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="Projects.html#projects" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="vision.html" class="nav-link">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link ">ContactUs</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link ">Login</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>


    <!-- CONTACT -->
    <section class="contact section-padding">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                    <h1 class="mb-4">Let's <strong>talk</strong> about making project's profitable <strong>creatively</strong></h1>

                    <p>or email us at <a href="mailto:info@wer4u.in">info@wer4u.in</a></p>
                </div>

                <div class="col-lg-8 mx-auto col-md-10 col-12">

                    <form action="" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          
                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>


                            <div class="col-lg-12 col-12">

                                <label for="service" class="form-control">Services:         
								 <select name="service" id="service" >
									<option >choose</option>
									<option value="finance">Finance</option>
									<option value="automation">Automation</option>
									<option value="website">Website</option>
									<option value="real_estate">Real Estate</option>
									<option value="company_formation">Company Formation </option>
									<option value="tax_compliance">Tax Compliace</option>
									<option value="renewable_energy">Renewable Energy</option>
									<option value="food_processing">Food Processing</option>
									<option value="legal_agreement">Legal Agreement</option>
 								 </select>
                            </div>

                            <div class="col-lg-12 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="on">
                            </div>

                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" name="phone_no" placeholder="Mobile Number">
                            </div>

							<div class="col-lg-12 col-12" >
			
								<label for="State" class="form-control">Select State:         
								<select name="state" id="state" >
									<option >choose</option>
									<option value="maharastra">Maharastra</option>
									
 								</select>
                            </div>
							
							<div class="col-lg-12 col-12" >
			
								 <label for="District" class="form-control">Select District         
								 <select name="district" id="district" >
									<option >choose</option>
									<option value="akola">Akola</option>
									<option value="amaravati">Amravati</option>
									<option value="beed">Beed</option>
									<option value="jalna">Jalna</option>
									<option value="thane">Thane </option>
									<option value="raigad">Raigad</option>
									<option value="chandrapur">Chandrapur</option>
									<option value="nagpur">Nagpur</option>
									<option value="dhule">Dhule</option>
									<option value="jalgaon">jalgaon</option>
									<option value="pune">Pune</option>
									<option value="satara">Satara</option>
 								 </select>
                            </div>
							
                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Message"></textarea>
                          </div>

                            <div class="col-lg-5 mx-auto col-7">
                                <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>
                            </div>

                    </form>
                    </div>

                </div>
            </div>
    </section>

    <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
    <div class="google-map" data-aos="zoom-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.3302869429513!2d73.83332031484258!3d18.5139707874129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf8f3a27237d%3A0xf34972cd5c0b2362!2sPrabhat%20Rd%2C%20Deccan%20Gymkhana%2C%20Pune%2C%20Maharashtra%20411004!5e0!3m2!1sen!2sin!4v1606810544311!5m2!1sen!2sin"
            width="1920" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                       <a href="tel:989049200> <i class="fa fa-phone mr-2 footer-icon"></i> +91 9890492000</a>
                    </p>

                    <p>
                        <a href="mailto:wer4u.sme@gmail.com">
                            <i class="fa fa-envelope mr-2 footer-icon"></i> wer4u.sme@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Our Address</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i> Prabhat Road, Deccan, Pune-04.
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; WeR4U SME Solutions
                        <br>

                </div>



                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-facebook"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>