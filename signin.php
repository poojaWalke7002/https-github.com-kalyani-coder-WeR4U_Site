<?php


//FETCHING DATA FROM CONTACT.HTML
$Name=$_POST['name'];
$Email=$_POST['email'];
$Mobile_no=$_POST['Phone_no'];
$Message=$_POST['message'];

//Email Parameters
$Subject="Email Verification ";
$mail_msg="This is OTP code";

/*Trial
echo"Name :".$Name;
echo"Email :".$Email;
echo"Mobile no :".$Mobile_no;
echo"Message :".$Message;
*/

mail($Email,$Subject,$mail_msg);


?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>WeR4U Industrial solutions-Contact Us</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
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
          <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
               <i>WeR4U solutions </i> 
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    
					<li class="nav-item">
                        <a href="index.html#approach" class="nav-link smoothScroll">Approach</a>
                    </li>
					<li class="nav-item">
                        <a href="index.html#about" class="nav-link smoothScroll">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.html#gallery" class="nav-link smoothScroll">Gallery</a>
                    </li>
					<li class="nav-item">
                        <a href="Projects.html" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="vision.html" class="nav-link">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link ">Login</a>
                    </li>
					<li class="nav-item">
                        <a href="contact.html" class="nav-link active">Contact Us</a>
                    </li>   

                </ul>
            </div>
        </div>
    </nav>

     <!-- CONTACT -->
     <section class="contact section-padding">
	 
          <div class="container">
               <div class="row">
					<?php
					

						//FETCHING DATA FROM CONTACT.HTML
						$Name=$_POST['name'];
						$Email=$_POST['email'];
						$Mobile_no=$_POST['Phone_no'];
						$Message=$_POST['message'];

						//Email Parameters
						$Subject="Email Verification ";
						$mail_msg="This is OTP code";

						/*Trial
						echo"Name :".$Name;
						echo"Email :".$Email;
						echo"Mobile no :".$Mobile_no;
						echo"Message :".$Message;
						*/

						$retval=mail($Email,$Subject,$mail_msg);
						
						 if( $retval == true )
						 {
								echo "Message sent successfully...";
						 }else 
						 {
								echo "Message could not be sent...";
						 }

					?>
				
               </div>
          </div>
     </section>

     <!-- UPLOAD DOCUMENT -->
 
     <section class="about section-padding pb-0" >
          <div class="container">
               <div class="row">
			   <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4"><strong>Welcome</strong><h1>
                    </div>

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                      <form action="login.php" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          
                          <div class="col-lg-12 col-12">
                             <label for="img">Select image1:</label>
								<input type="file" class="form-control" name="img1" accept="image/*">
                          </div>
						  
                          <div class="col-lg-12 col-12">
                             <label for="img">Select image2:</label>
								<input type="file" class="form-control" name="img2" accept="image/*">
                          </div>
						  

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">login</button>
                         </div>

                      </form>  
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +91 9890492000
            </p>

            <p>
              <a href="mailto:wer4u.sme@gmail.com">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                wer4u.sme@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Address</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Prabhat Road, Deccan, Pune-04.
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; WeR4U SME Solutions
            <br>
            
          </div>

         

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-facebook"></a></li>
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
