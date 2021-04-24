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

  <title>Mayukh Mukherjee Home Page</title>
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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/mm6.jpg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link  scrollto" href="#portfolio">Projects</a></li>
          <li><a class="nav-link  scrollto" href="#journal">Blogs</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="home">

    <div class="container">
      <div class="hero-content">
        <h1>I'm <span class="typed" data-typed-items="Mayukh Mukherjee, Researcher, Developer"></span></h1>
        <p>Researcher, Developer, TRDDC Pune, IIEST Shibpur</p>

        <ul class="list-unstyled list-social">
		  <li><a href="mailto:mayukh.iiest@gmail.com"><i class="bi bi-envelope"></i></a></li>
		  <li><a href="https://github.com/mayukhmohan"><i class="bi bi-github"></i></a></li>
		  <li><a href="https://www.linkedin.com/in/mayukhmohan/"><i class="bi bi-linkedin"></i></a></li>
		  <li><a href="https://twitter.com/mayukhmohan"><i class="bi bi-twitter"></i></a></li>
          <li><a href="https://www.facebook.com/kalyan.mukherjee.5876/"><i class="bi bi-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/iammayukhmohan/"><i class="bi bi-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-4 ">
            <div class="div-img-bg">
              <div class="about-img">
                <img src="assets/img/me.png" class="img-responsive" alt="me">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="about-descr">

              <p class="p-heading">Hi! I am a computer science graduate from Indian Institute of Engineering Science & Technology, Shibpur. Currently Working as a Researcher at Tata Research Development and Design Centre Pune(TCS Research and Innovation).</p>
              <p class="separator">I was previously a research intern at TRDDC Pune Software System and Services Team where I explored Deep Reinforcement Learning and Simulation. I also spent my summer 2018 as a software development intern at IIT Bombay working on Drupal and H5P Development to help the content creators to keep track of a users performance.. 
			  I'm interested in building robust, scalable and interpretable intelligent systems to solve real world problems. Also interested in System Design, BlockChain and CyberSecurity.
			  You can find my resume here</p>

            </div>

          </div>
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services">
      <div class="container">
        <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
		  <div>
				<p style="color:#dca570;font-size:40px;">Tech Skills</p>
		  </div>
          <div class="swiper-wrapper">
		    
			<div class="swiper-slide">
              <div class="services-block">
                <i class="icon-c"></i>
                <span>C</span>
                <p class="separator"> </p>
              </div>
            </div>
		  
		    <div class="swiper-slide">
              <div class="services-block">
                <i class="icon-cplusplus"></i>
                <span>C++</span>
                <p class="separator"> </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-python"></i>
                <span>Python</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-java"></i>
                <span>JAVA</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fas fa-cog"></i>
                <span>REST api</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="iconify" height="44" width="44" data-icon="simple-icons:graphql" data-inline="false"></span>
                <span>GraphQL</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/grpc.png" class="logo">
                <span>gRPC + Protobuff</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="icon-mysql"></i>
                <span>SQL</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="icon-mongodb"></i>
                <span>MongoDB</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-js"></i>
                <span>JavaScript</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="iconify" height="44" width="44" data-icon="simple-icons:typescript" data-inline="false"></span>
                <span>TypeScript</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-angular"></i>
                <span>Angular</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-react"></i>
                <span>React.js</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-node"></i>
                <span>Node.js</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fas fa-code"></i>
                <span>AJAX</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-php"></i>
                <span>PHP</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="fas fa-desktop"></i>
                <span>Web Development</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-android"></i>
                <span>Android Development</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="services-block">
                <i class="bi bi-bar-chart"></i>
                <span>Analytics</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="iconify" height="44" width="44" data-icon="simple-icons:tensorflow" data-inline="false"></span>
                <span>Tensorflow</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="iconify" height="44" width="44" data-icon="simple-icons:keras" data-inline="false"></span>
                <span>Keras</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="iconify" height="44" width="44" data-icon="simple-icons:pytorch" data-inline="false"></span>
                <span>PyTorch</span>
                <p class="separator"> </p>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
	  
	  <div class="container">
        <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
		  <div>
				<p style="color:#dca570;font-size:40px;">Applications and operating systems</p>
		  </div>
          <div class="swiper-wrapper">
		    
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-linux"></i>
                <span>Linux</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <!--<img src="assets/img/kali-linux.png" class="logo">-->
				<span class="iconify" height="44" width="44" data-icon="simple-icons:kalilinux" data-inline="false"></span>
                <span>Kali</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-ubuntu"></i>
                <span>Ubuntu</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="fab fa-windows"></i>
                <span>Windows</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="icon-gradle"></i>
                <span>Gradle</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <!--<img src="assets/img/maven.png" class="logo">-->
                <span class="iconify" height="44" width="44" data-icon="simple-icons:apachemaven" data-inline="false"></span>
				<span>Maven</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <i class="icon-git"></i>
                <span>Git</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <!--<img src="assets/img/android_studio.png" class="logo">-->
                <span class="iconify" height="44" width="44" data-icon="simple-icons:androidstudio" data-inline="false"></span>
				<span>Android Studio</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/vscode.png" class="logo">
                <span>VSCode</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <span class="latex">L<sup>a</sup>T<sub>e</sub>X</span></p>
				<span>Latex<span>
                <p class="separator"> </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
	  
	  <div class="container">
        <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
		  <div>
				<p style="color:#dca570;font-size:40px;">Others</p>
		  </div>
          <div class="swiper-wrapper">
		    
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/ml.png" class="logo">
                <span>Machine Learning</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/neural.png" class="logo">
                <span>Deep Learning</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/rein.png" class="logo">
                <span>Reinforcement Learning</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/cv.png" class="logo">
                <span>Computer Vision</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/ai.png" class="logo">
                <span>Artificial Intellignce</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/imgp.png" class="logo">
                <span>Image Processing</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/cryp.png" class="logo">
                <span>Cryptography Network Security</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/cloud.png" class="logo">
                <span>Cloud</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/bgd.png" class="logo">
                <span>Big Data</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/iot.png" class="logo">
                <span>IoT</span>
                <p class="separator"> </p>
              </div>
            </div>
			
			<div class="swiper-slide">
              <div class="services-block">
                <img src="assets/img/block.png" class="logo">
                <span>Blockchain</span>
                <p class="separator"> </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Projects</h2>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-crypto">Crypto</li>
			  <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-web">Web</li>
			  <li data-filter=".filter-ml">ML</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-crypto">
            <img src="assets/img/projects/crypto_1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Coding Based Cryptography for Post Quantum Era.</h4>
              <p>McElice Code Based Cryptosystem considered.</p>
              <a href="assets/img/projects/crypto_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Coding Based Cryptography for Post Quantum Era. 
			  <br>Jul,2019 - Jul,2020"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ml">
            <img src="assets/img/projects/ml_1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Document Image Binarization</h4>
              <p>Image Processing , Convolutional Neural Network and Recurrent neural network</p>
              <a href="assets/img/projects/ml_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Image Processing , Convolutional Neural Network and Recurrent neural network
			  <br>Jul,2018 - Jan,2019"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ml">
            <img src="assets/img/projects/ml_2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Self Driving Car</h4>
              <p>Mentor - Prof. Asit K. Das, Paper accepted by Springer, Using computer vision and Convolutional Neural Network</p>
              <a href="assets/img/projects/ml_2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Self Driving Car
			  <br>Aug,2018 - Oct,2018"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/projects/app_1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Weather Application Development on Android</h4>
              <p>Sunshine is an Android application for the weather forecast by Udacity.</p>
              <a href="assets/img/projects/app_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Weather Application Development on Android
			  <br>Feb 2018 - June 2018"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ml">
            <img src="assets/img/projects/ml_3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Contact Matrix for Protein-Protein Interaction</h4>
              <p>Bio-Informatics, Stacked Auto Encoders and Support Vector Machine</p>
              <a href="assets/img/projects/ml_3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Contact Matrix for Protein-Protein Interaction
			  <br>Jan,2018 - Mar,2018"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/projects/web_1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web Development with AJAX</h4>
              <p>NIRMAAN (an official college website affiliated professor feedback form).</p>
              <a href="assets/img/projects/web_1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web Development with AJAX
			  <br>Jan 2018"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/projects/app_2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Android Application Development on Android ‘Quake Report’</h4>
              <p>Mentor – Dr. Biplab Kumar Sikdar, IIEST, Shibpur</p>
              <a href="assets/img/projects/app_2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Android Application Development on Android ‘Quake Report'
			  <br>Aug,2017 – Dec,2017"><i class="bx bx-plus"></i></a>
              <a href="project_details_1.php" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

      <div class="container">
        <div class="section-title text-center">
          <h2>My Blogs</h2>
        </div>
      </div>

      <div class="container">
        <div class="journal-block">
          <div class="row">

            <div class="col-lg-4 col-md-6">
              <div class="journal-info">

                <a href="blog_1.php"><img src="assets/img/grg.png" class="img-responsive" alt="img"></a>

                <div class="journal-txt">

                  <h4><a href="blog_1.php">Inter Process Communication (JAVA - Python)</a></h4>
                  <p class="separator">Comparative studies with REST-JSON, gRPC-Protobuff, GraphQL
                  </p>

                </div>

              </div>
            </div>


          </div>
        </div>
      </div>

    </div><!-- End Journal Section -->

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
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>