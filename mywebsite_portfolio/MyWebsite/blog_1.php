<?php 
if(isset($_POST['submit'])){
    $to = "mayukh.iiest@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];;
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
	
	
	// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
	  /*
	  $contact->smtp = array(
		'host' => 'example.com',
		'username' => 'example',
		'password' => 'pass',
		'port' => '587'
	  );
	  */

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mayukh Mukherjee Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/mm3.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/tech_icons/css/all.css" rel="stylesheet">
  <link href="assets/vendor/tech_icon_part2/font-mfizz.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="assets/vendor/tech_js/iconify.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/mm6.jpg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  
	<!-- ======= Breadcrumbs Section ======= -->
	<!--<section class="breadcrumbs">
	  <div class="container">

		<div class="d-flex justify-content-between align-items-center">
		  <h2>Blog Details</h2>
		  <ol>
			<li><a href="index.php">Home</a></li>
			<li>Blog Details</li>
		  </ol>
		</div>

	  </div>
	</section><!-- Breadcrumbs Section -->-->

    <!-- ======= Blog Single ======= -->
    <div class="main-content paddsection">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-16 col-md-offset-2">
            <div class="row">
              <div class="container-main single-main">
                <div class="col-md-12">
                  <div class="block-main mb-30">
                    <div class="content-main single-post padDiv">
                      <div class="journal-txt">
                        <h4><a href="#">gRPC-Protobuff vs Rest api with JSON vs GraphQL</a></h4>
                      </div>
                      <div class="post-meta">
                        <ul class="list-unstyled mb-0">
                          <li class="author">by:<a href="">Mayukh</a></li>
                          <li class="date">date:<a href="">Coming Soon</a></li>
                          <li class="commont"><i class="ion-ios-heart-outline"></i><a href="#"></a></li>
                        </ul>
                      </div>
					  
					  
					  
					  <!--WRITE YOUR THING IN HERE-->
					  <img src="assets/img/grg2.png" class="img-responsive" alt="reviews2">
                      <p class="mb-30"></p>
                      <blockquote></blockquote>
                      <p class="mb-30"></p>
					  <!--WRITE YOUR THING IN HERE-->
					  
					  
					  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Single -->
	
	<!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">

            <div class="col-lg-6">
              <div class="contact-contact">

                <h2 class="mb-30">GET IN TOUCH</h2>

                <ul class="contact-details">
                  <li><i class="bi bi-house"></i><span> &nbsp;Ranaghat Nadia</span></li>
                  <li><span> &nbsp; &nbsp;  &nbsp; West Bengal India</span></li>
                  <li><i class="bi bi-telephone"></i><span>&nbsp;+91 9474565689</span></li>
				  <li><i class="bi bi-telephone"></i><span>&nbsp;+91 8101597901</span></li>
                  <li><i class="bi bi-envelope"></i><span>&nbsp;mayukh.iiest@gmail.com</span></li>
                </ul>

              </div>
            </div>

            <div class="col-lg-6">
              <form action="" method="post" role="form" class="php-email-form">
                <div class="row gy-3">

                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
		  <li><a href="mailto:mayukh.iiest@gmail.com"><i class="bi bi-envelope"></i></a></li>
		  <li><a href="https://github.com/mayukhmohan"><i class="bi bi-github"></i></a></li>
		  <li><a href="https://www.linkedin.com/in/mayukhmohan/"><i class="bi bi-linkedin"></i></a></li>
		  <li><a href="https://twitter.com/mayukhmohan"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://www.facebook.com/kalyan.mukherjee.5876/"><i class="bi bi-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/iammayukhmohan/"><i class="bi bi-instagram"></i></a></li>
        </ul>

      </div>

      <p>&copy; Copyrights Mayukh. All rights reserved.</p>

      <div class="credits">
        Designed by <a href="https://www.linkedin.com/in/mayukhmohan/">Mayukh Mukherjee</a>
      </div>

    </div>
  </div><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>