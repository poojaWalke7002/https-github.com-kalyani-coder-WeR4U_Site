

    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


$name = $_POST['name']; 
$email = $_POST['email']; 
$service = $_POST['service']; 
$Phone_no = $_POST['Phone_no']; 
$state = $_POST['state']; 
$district = $_POST['District']; 
$message = $_POST['message']; 



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = ' smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'bhupendrabanothe@gmail.com';                     // SMTP username
    $mail->Password   = 'lmojlsgrcfbjjesn';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@wer4u.in', $name);
    $mail->addAddress('info@wer4u.in', 'WeR4U team');     // Add a recipient
  //  $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Let`s talk about making project`s profitable';
    $mail->Body    = '<h2>ContactUs</h2>

    <table style="width:75%; border-collapse:collapse;" >

    <tr style="border: 1px solid black;">
        <th>Name</th>
        <td style="border: 1px solid black;"> '.$name.'</td>
      </tr>
      <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Email</th>
        <td style="border: 1px solid black;"> '.$email.'</td>
      </tr>
      <tr style="border: 1px solid black;">
      <th style="border: 1px solid black;" >Service</th>
      <td style="border: 1px solid black;"> '.$service.'</td>
    </tr>

    <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">Phone no</th>
      <td style="border: 1px solid black;"> '.$Phone_no.'</td>
    </tr>
    <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">State</th>
      <td style="border: 1px solid black;"> '.$state.'</td>
    </tr>
    <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">District</th>
      <td style="border: 1px solid black;"> '.$district.'</td>
    </tr>
    <tr style="border: 1px solid black;">
    <th style="border: 1px solid black;">Message</th>
      <td style="border: 1px solid black;"> '.$message.'</td>
    </tr>
       
    
    </table>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>WeR4U Industrial solutions</title>
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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
           
        <h2 style="color: rgb(255, 255, 255);"> <i class="fa fa-line-chart"></i>
                    <i>WeR4U solutions</i></h2>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="#approach" class="nav-link smoothScroll">Approach</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">AboutUs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#gallery" class="nav-link smoothScroll">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="Projects.html" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="Projects.html#service" class="nav-link">Services</a>
                    </li>
					
                    <li class="nav-item">
                        <a href="vision.html" class="nav-link">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link ">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link ">ContactUs</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <section class="contact section-padding">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                    <h1 class="mb-4">Hey there, <strong>Messages</strong>  sent  <strong>successfully</strong></h1>

                    <p>Back to <a href="index.html">Home</a> </p>
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
                        <a href="tel:989049200><i class="fa fa-phone mr-2 footer-icon"></i> +91 9890492000</a>
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


