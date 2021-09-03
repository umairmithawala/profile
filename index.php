<?php 
	require_once 'database/db-con.php';
?>

<?php

	if (isset($_POST['submit'])){
		$subject = $_POST['subject'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];

		$query = "INSERT INTO `data`(`id`, `subject`, `name`, `email`, `msg`) VALUES (NULL,'$subject','$name','$email','$msg')";

		if ($con->query($query) === true) {
			?>

			<script>

			alert('Thank You, Your Data is very important for me');	
				
				</script>

			<?php
											
		}else{
			echo "Error: " . $query . "<br>" . $con->error;
		}

	}


?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> Umair's | Personal Portfolio </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">

	<!-- ========== Start Stylesheet ========== -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/fontawesome.min.css" rel="stylesheet" />
	<link href="assets/css/magnific-popup.css" rel="stylesheet" />
	<link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
	<link href="assets/css/all.min.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/icofont.min.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->
</head>

<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

	<!-- Preloader -->
	<div class="preloader">
		<div class="lds-ellipsis">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- Preloader End -->

	<div class="theme_all_wrap" data-magic-cursor=" " data-color="crimson">

		<!-- Document Wrapper   
=============================== -->
		<div id="main-wrapper">
			<!-- Start header
    ============================================= -->

			<!-- Header -->
			<header id="header" class="sticky-top position-absolute bg-transparent">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">

					<div class="container position-relative">
						<!-- start container -->

						<!-- Logo -->
						<a href="index.php" class="navbar-brand pt-0 logo">
							<span class="profile-image">
								<img class="profile_img" src="img/logo2.png" title="I'm Umair" alt=""
									style="max-width: 200px;">
							</span>
						</a>
						<!-- Logo End -->
						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
							aria-label="Toggle navigation">
							<i class="icofont-navigation-menu"></i>
						</button>

						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item"><a class="nav-link smooth-scroll active" href="#home">Home</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#service">Service</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#work">Portfolio</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#feed">Testimonial</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#blog">Blog</a></li>
								<li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="header-serarch-btn">
							<a class="smooth-scroll btn-2" href="#contact">hire me</a>
						</div>
					</div> <!-- Container End -->
				</nav>
				<!-- Navbar End -->
			</header>
			<!-- Header End -->

			<div class="clearfix"></div>

			<main class="main">

				<!-- Start Hero   
		============================================= -->
				<div id="home" class="hero-section hero-section-bg">
					<div class="animate_shape position-relative">
						<div class="animation_shape position-abolute shape-01"></div>
						<div class="animation_shape position-abolute shape-02"></div>
						<div class="animation_shape position-abolute shape-03"></div>
						<div class="animation_shape position-abolute shape-04"></div>
						<div class="animation_shape position-abolute shape-05"></div>
						<div class="animation_shape position-abolute shape-06"></div>
					</div>
					<div class="hero-single">
						<div class="container">
							<!-- start container -->
							<div class="row">
								<!-- start row -->
								<div class="col-md-6">
									<!-- hero text left -->
									<div class="hero-content mt-40 wow fadeInUp" data-wow-duration=".5s"
										data-wow-delay=".6s">
										<span class="top-title wow fadeInUp margin-bottom" data-wow-duration=".6s"
											data-wow-delay=".7s">Umair Mithawala</span>
										<div class="typed-strings">
											<p> <span class="type_color">Creative Designer</span></p>
											<p> <span class="type_color">Wordpress Developer</span></p>
											<p> <span class="type_color">MEAN Stack Developer</span></p>
										</div>
										<h2 class="text-16 header_type_text text-white mb-2 mb-md-3">
											I'm <span class="typed"></span>
										</h2>
										<p class="header-intro-text wow fadeInUp margin-top" data-wow-duration=".6s"
											data-wow-delay=".8s"> I’m proud that my web development work has helped my
											clients to grow their businesses and generate more revenue. </p>
										<div class="hro-btn wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".9s">
											<a href="assets/download/cv.pdf" class="theme-btn" download>
												Download cv
											</a>
										</div>
									</div>
								</div> <!-- hero left text end -->
								<div class="col-md-6">
									<!-- hero right img animation -->
									<div class="hero-right wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
										<img src="img/hr-02.png" alt="" class="thumbnail" />
										<img src="img/hr-01.png" alt="" class="thumbnail-2 mt-10" />
									</div>
								</div> <!-- hero right img animation  end -->
							</div>
						</div>
					</div><!-- single Hero End -->
					<div class="about-scroll-down text-center">
						<a href="#about" class="scroll-down-arrow scroll_down smooth-scroll"><i
								class="icofont-scroll-bubble-down"></i></a>
					</div>
				</div>
				<!-- End Hero -->

				<!-- About us
		============================================= -->
				<div id="about" class="about-area de-padding">
					<div class="about-wpr">
						<div class="container">
							<!-- container -->
							<div class="row">
								<!-- row -->
								<div class="col-md-6 mb-50">
									<div class="about-left wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
										<div class="about-header-left">
											<h2 class="about-tl gr-bg wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".4s">
												02 Years of
												<br />
												Experience
											</h2>
											<h4 class="about-tl-2 mb-20">Do you have any project?</h4>
											<a href="#contact" class="smooth-scroll btn-3">Let's Talk</a>
										</div>
									</div>
								</div> <!-- about left text end -->
								<div class="col-md-6">
									<div class="about-right wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".5s">
										<span class="top-title"> Umair Mithawala </span>
										<h2 class="about-tl-3 gr-2">
											Design is not only art but also
											science and commerce as well
										</h2>
										<p>
											I am dedicated his life to learning what makes humans tick. He studies,
											researches and reads everything hecan, and shares his
											findings with his clients. His philosophy is to learn, test, analyse,
											improve and re-test. His motto is stay agile.
										</p>
										<div class="about-cn">
											<ul>
												<li><i class="far fa-envelope"></i> umairmithawala007@gmail.com</li>
												<li><i class="fab fa-whatsapp"></i> 8401302846</li>
											</ul>
										</div>
									</div>
								</div> <!-- about right text end -->
							</div> <!-- end row -->
							<div class="row">
								<div class="col-md-6">
									<div class="progress-left pt-80">
										<div class="skill-section">
											<!-- Progress Bar Start -->
											<div class="progress-box">
												<h5> HTML5 <span class="pull-right">95%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="95"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> CSS3 <span class="pull-right">95%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="95"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> Java Script <span class="pull-right">90%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="90"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> jquery <span class="pull-right">85%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="85"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> Angular <span class="pull-right">75%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="75"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> PDS XD <span class="pull-right">95%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="95"></div>
												</div>
											</div>
											<!-- End Progressbar -->
										</div>
									</div>
								</div> <!-- end col-6 -->
								<div class="col-md-6">
									<div class="progress-right pt-80">
										<div class="skill-section">
											<!-- Progress Bar Start -->

											<div class="progress-box">
												<h5> Node Js <span class="pull-right">70%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="70"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> Wordpress <span class="pull-right">95%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="95"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> MongoDb <span class="pull-right">90%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="90"></div>
												</div>
											</div>

											<div class="progress-box">
												<h5> Git Hub <span class="pull-right">100%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="100"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> PHP <span class="pull-right">80%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="80"></div>
												</div>
											</div>
											<div class="progress-box">
												<h5> BootStrap <span class="pull-right">95%</span></h5>
												<div class="progress">
													<div class="progress-bar" role="progressbar" data-width="95"></div>
												</div>
											</div>
											<!-- End Progressbar -->
										</div>
									</div>
								</div> <!-- end col-6  -->
							</div> <!-- end row-->
						</div> <!-- end container -->

					</div> <!-- end about wrp -->
				</div>
				<!-- About us -->

				<!-- Start Experience
		============================================= -->
				<div class="exp-area de-padding">
					<div class="container">
						<div class="site-title">
							<h2 class="site-tl">
								Education & Experience
							</h2>
						</div> <!-- end section title -->
						<div class="exp-wpr grid-3">
							<div class="exp-box wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="exp-icon one">
									<i class="far fa-file-code"></i>
								</div>
								<div class="exp-content">
									<h4>Web Developer</h4>
									<p> Code Fly </p>
									<span>(2020 - 2021)</span>
								</div>
							</div> <!-- end one -->
							<div class="exp-box wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
								<div class="exp-icon two">
									<i class="fab fa-js-square"></i>
								</div>
								<div class="exp-content">
									<h4>Java Script Developer</h4>
									<p>H.N Techno</p>
									<span>(2019 - 2020)</span>
								</div>
							</div> <!-- end two -->
							<div class="exp-box wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">
								<div class="exp-icon three">
									<i class="fab fa-node"></i>
								</div>
								<div class="exp-content">
									<h4>MEAN Stack Developer</h4>
									<p> Learn Course </p>
									<span>(2018- 2019)</span>
								</div>
							</div> <!-- end three -->
							<div class="exp-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="exp-icon four">
									<i class="icofont-graduate-alt"></i>
								</div>
								<div class="exp-content">
									<h4> M.C.A </h4>
									<p>L.J University (pursuing) </p>
									<p> Ahmedabad </p>
									<span>(2021 - 2023)</span>
								</div>
							</div> <!-- end four -->
							<div class="exp-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
								<div class="exp-icon five">
									<i class="icofont-graduate"></i>
								</div>
								<div class="exp-content">
									<h4> B.C.A </h4>
									<p>University of KSV</p>
									<p>Gandhinagar</p>
									<span>(2018 - 2021)</span>
								</div>
							</div> <!-- end five -->
							<div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s">
								<div class="exp-icon six">
									<i class="fas fa-school"></i>
								</div>
								<div class="exp-content">
									<h4>High School (12th)</h4>
									<p>F.D High School Ahmedabad</p>
									<span>(2017 - 2018)</span>
								</div>
							</div> <!-- end six -->
						</div> <!-- end exp-wrp -->
					</div> <!-- end container -->
				</div>
				<!-- End Experience -->

				<!-- Start Counter
		============================================= -->
				<div class="counter-area de-padding">
					<div class="shape-filter">
						<div class="shape-filter-one"></div>
						<div class="shape-filter-two"></div>
					</div>
					<div class="container">
						<!-- start container-->
						<div class="counter-wpr grid-2">
							<!-- start counter-wrp -->
							<div class="counter-left">
								<div class="counter-left-pic mt-20">
									<div class="counter-left-img-area position-relative wow fadeInUp"
										data-wow-duration=".6s" data-wow-delay=".3s">
										<img src="img/counter-02.png" alt="" class="thumbnail position-absolute" />
										<img src="img/counter-01.png" alt=""
											class="thumbnail-2 position-absolute mt-10 img-play-btn" />
										<div class="video-box fl-wrap">
											<a class="video-box-btn color-bg popup-vimeo image-popup"
												href="https://www.youtube.com/watch?v=C72WkcUZvco"><i class="fa fa-play"
													aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="counter-content">
								<div class="site-title">
									<h2 class="site-tl wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
										My Previous Projects <br /> &amp; Clients Speak Out for Me
									</h2>
								</div>
								<div class="counter-counter grid-2">
									<div class="fun-fact">
										<span class="fun-icon one"><i class="icofont-calendar"></i></span>
										<div class="fun-desc">
											<p class="timer" data-to="2550" data-speed="3000">2550</p>
											<span class="medium">Working Hours</span>
										</div>
									</div>
									<div class="fun-fact fun-active">
										<span class="fun-icon two"><i class="icofont-globe"></i></span>
										<div class="fun-desc">
											<p class="timer" data-to="50" data-speed="3000">50</p>
											<span class="medium">Total projects</span>
										</div>
									</div>
									<div class="fun-fact">
										<span class="fun-icon three"><i class="icofont-bulb-alt"></i></span>
										<div class="fun-desc">
											<p class="timer" data-to="3" data-speed="3000">3</p>
											<span class="medium">Years Journey</span>
										</div>
									</div>
									<div class="fun-fact">
										<span class="fun-icon four"><i class="icofont-nerd-smile"></i></span>
										<div class="fun-desc">
											<p class="timer" data-to="25" data-speed="3000">25</p>
											<span class="medium">Total Client</span>
										</div>
									</div>
								</div>
								<div class="hire-btn mt-60">
									<a href="#contact" class="btn-2 smooth-scroll">
										hire me
									</a>
								</div> <!-- end btn-->
							</div>
						</div> <!-- end counter-wrp -->
					</div> <!-- end container -->
				</div>
				<!-- End Counter-->

				<!-- Start Services
		============================================= -->
				<div id="service" class="service-area de-padding">
					<div class="container">
						<div class="site-title text-center">
							<!-- service section title -->
							<span class="top-title">My Services</span>
							<h2 class="site-tl">
								A brief of Offerting Services
							</h2>
						</div>
						<div class="service-wpr grid-3">
							<!-- start service-wpr -->
							<div class="service-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
								<div class="sershp1">
								</div>
								<div class="service-icon service-one">
									<i class="icofont-vector-path"></i>
								</div>
								<div class="service-info">
									<h2>Graphic Design</h2>
									<ul>
										<li>Logo design</li>
										<li> PSD XD </li>
										<li>Business card crafting</li>
										<li>Package design</li>
										<li>Web banner </li>
										<li>Flyer & Brochure</li>
										<li>Social Media Package</li>
									</ul>
								</div>
							</div> <!-- end service one -->
							<div class="service-box wow fadeInDown" data-wow-duration=".7s" data-wow-delay=".6s">
								<div class="sershp2">
								</div>
								<div class="service-icon service-two">
									<i class="icofont-ui-browser"></i>
								</div>
								<div class="service-info">
									<h2>Web Development</h2>
									<ul>
										<li>Daynamic Website</li>
										<li>E-Commerce Website </li>
										<li> Education Website </li>
										<li> Static Website</li>
										<li>Portal Website</li>
										<li>PHP Project</li>
										<li>Nodejs Project</li>
									</ul>
								</div>
							</div> <!-- end service two -->
							<div class="service-box wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
								<div class="sershp3">
								</div>
								<div class="service-icon service-three">
									<i class="icofont-ui-theme"></i>
								</div>
								<div class="service-info">
									<h2>Wordpress Ninja</h2>
									<ul>
										<li>Logo design</li>
										<li>Web UI </li>
										<li>Design with Elementor</li>
										<li>Plugin Costemization</li>
										<li>Work on Woocommerce</li>
										<li>E-Commerce Website </li>
									</ul>
								</div>
							</div> <!-- end service three -->
						</div> <!-- end service wrp -->
					</div> <!-- end container -->
				</div>
				<!-- End Services -->

				<!-- Start Faq
		============================================= -->
				<div class="fq-area de-padding">
					<div class="faq-shape">
						<div class="thumbnail-2 faq-shape-one"></div>
					</div>
					<div class="container">
						<!-- start container -->
						<div class="faq-wpr grid-2">
							<!-- start faq-wpr -->
							<div class="fq-left mb-30">
								<div class="faq-pic wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">
									<img src="img/faqs-1.png" alt="thumb">
								</div>
							</div>
							<div class="fq-right">
								<div class="site-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
									<h2 class="site-tl mb-0">
										People what ask to <br />
										know more about me ?
									</h2>
								</div>
								<div id="accordion">
									<div class="card accordion-item mt-20">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<button class="accordion-button btn btn-link" data-toggle="collapse"
													data-target="#collapseOne" aria-expanded="true"
													aria-controls="collapseOne">
													1. What services do I offer ?
												</button>
											</h5>
										</div>

										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
											data-parent="#accordion">
											<div class="card-body">
												My enthusiasm has led us to become a best Web Developer in India for
												delivering various industry-led mobility solutions in web application
												development domains leveraging futuristic technologies like Graphic
												Designing & Developing, Web Designing, UI/UX Design, Wordpress Website
												etc
											</div>
										</div>
									</div> <!-- End card -->

									<div class="card accordion-item mt-20">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="accordion-button btn btn-link collapsed"
													data-toggle="collapse" data-target="#collapseTwo"
													aria-expanded="false" aria-controls="collapseTwo">
													2. Why You Conect Me ?
												</button>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
											data-parent="#accordion">
											<div class="card-body">
												For any business, customers are always at the center. Being a leading
												web and mobile app development company, our definition goes beyond our
												direct customers. We always start from where you are with your ideas and
												we think from YOUR end customers' perspectives, their pain areas and
												devise a solution that solves core problems to benefit your business.
											</div>
										</div>
									</div> <!-- End card -->

									<div class="card accordion-item mt-20">
										<div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<button class="accordion-button btn btn-link collapsed"
													data-toggle="collapse" data-target="#collapseThree"
													aria-expanded="false" aria-controls="collapseTwo">
													3. How will you pay me?
												</button>
											</h5>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
											data-parent="#accordion">
											<div class="card-body">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
												eiusitempor is exercitation ullamco laboris.Lorem ipsum dolor sit amet,
												consectetur adipisicing elit.
											</div>
										</div>
									</div> <!-- End card -->

									<div class="card accordion-item mt-20">
										<div class="card-header" id="headingFour">
											<h5 class="mb-0">
												<button class="accordion-button btn btn-link collapsed"
													data-toggle="collapse" data-target="#collapseFour"
													aria-expanded="false" aria-controls="collapseTwo">
													4. What is the process & my time zone?
												</button>
											</h5>
										</div>
										<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
											data-parent="#accordion">
											<div class="card-body">
												With over two decades of experience in the offshore IT software
												development industry, we have a great set of internal frameworks with
												best-in-class infrastructure that enables us to deliver solutions with
												superior quality, at all times. All these years, we have learned how to
												prevent failures and replicate success. We don't just brag about
												quality. We define and deliver it in time.
											</div>
										</div>
									</div> <!-- End card -->
								</div>
							</div>
						</div> <!-- end faq-wpr -->
					</div> <!-- end container -->
				</div>
				<!-- End Faq -->

				<!-- Start Project Area
============================================= -->
				<section id="work" class="portfolio_bg de-padding">
					<div class="container">
						<!-- start container -->
						<div class="row">
							<!-- row -->
							<div class="col-md-3">
								<!-- portfolio left menu -->
								<div class="site-title work_section_title">
									<span class="top-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".3s">
										My Portfolio
									</span>
									<h2 class="site-tl wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".4s">
										Story of
										<br>
										Past Works
									</h2>
								</div>
								<ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu"
									id="menu-filter">
									<li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
									<li class="list-inline-item"><a class="" data-filter=".seo">College Project</a></li>
									<li class="list-inline-item"><a class="" data-filter=".webdesign">Web design</a>
									</li>
									<li class="list-inline-item"><a class="" data-filter=".work">Mobile App</a></li>
									<li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
								</ul>
							</div> <!-- end portfolio menu -->
							<div class="col-md-9">
								<!-- portfolio img -->
								<div class="container">
									<!-- container -->
									<div class="row mt-4 work-filter">
										<div class="col-md-4 work_item seo">
											<a href="img/portfolio/college project/1.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/college project/1.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item seo">
											<a href="img/portfolio/college project/2.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/college project/2.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item seo">
											<a href="img/portfolio/college project/3.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/college project/3.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item webdesign">
											<a href="img/portfolio/website/1.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/website/1.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item webdesign">
											<a href="img/portfolio/website/2.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/website/2.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item webdesign">
											<a href="img/portfolio/website/3.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/website/3.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item work">
											<a href="img/portfolio/mobile app/1.jpg" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/mobile app/1.jpg"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item work">
											<a href="img/portfolio/mobile app/2.jpg" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/mobile app/2.jpg"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item work">
											<a href="img/portfolio/mobile app/3.jpg" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/mobile app/3.jpg"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item wordpress">
											<a href="img/portfolio/wordpress/1.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/wordpress/1.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item wordpress">
											<a href="img/portfolio/wordpress/2.png"" class=" img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/wordpress/2.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
										<div class="col-md-4 work_item wordpress">
											<a href="img/portfolio/wordpress/3.png" class="img-zoom">
												<div class="work_box">
													<div class="work_img">
														<img src="img/portfolio/wordpress/3.png"
															class="img-fluid mx-auto d-block rounded" alt="work-img">
													</div>
													<div class="work_detail">
														<p class="mb-2">Category</p>
														<h4 class="mb-0">Project Title</h4>
													</div>
												</div>
											</a>
										</div> <!-- end col-4 -->
									</div>
								</div> <!-- end container -->
							</div> <!-- end portfolio img -->
						</div>
					</div>
				</section>
				<!-- End Project Area -->

				<!-- Start Feedback
		============================================= -->
				<div id="feed" class="feedback-area de-padding">
					<div class="container">
						<!-- start container -->
						<div class="site-title text-center">
							<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
								Testimonial
							</span>
							<h2 class="site-tl wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
								People What Are Saying
							</h2>
						</div> <!-- end section title -->
						<div class="feedback-wpr feed-sldr owl-carousel owl-theme">
							<!-- start feedback-wpr -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									Fantastic work! I am just impressed by their service quality and working strategy. I
									hired them for the development of my online store and they have satisfied me to the
									full by delivering the exceptional solution.
								</p>
								<div class="feedback-desc">
									<img src="img/client/az.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Anzar Khan</h5>
										<span class="fz-16 l-h-1">CEO, Code Fly</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									These guys are absolutely the best in designing and development. I hired them for
									building my website from the scratch and told them all my requirements and
									preferences
								</p>
								<div class="feedback-desc">
									<img src="img/client/vijay.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Vijay Prajapati</h5>
										<span class="fz-16 l-h-1">CEO, H.N Techno</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									I went to Thrive with a basic “feel” I wanted in a website. They helped flush out
									the visual layout and content. I will be using them again in future endeavors.<br>
									Thanks again!
								</p>
								<div class="feedback-desc">
									<img src="img/client/m.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Mushab Mithawala</h5>
										<span class="fz-16 l-h-1">Web Developer, ZelousWeb</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									Umair Mithawala one of the great web Developer in Ahmedabad I have ever worked with.
									My PHP based website developed exactly as what I wanted.Highly recommend this
									Developer for PHP web development!
								</p>
								<div class="feedback-desc">
									<img src="img/client/adib.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Adib Mansuri</h5>
										<span class="fz-16 l-h-1">B.E, Michenical Er.</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									We are glad to say that they kept their promise. In addition to high-quality
									services, they provided us with a free landing page and promotion services.We are
									impressed with their work and may work.
								</p>
								<div class="feedback-desc">
									<img src="img/client/mo.jpeg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Mohammed Mithawala</h5>
										<span class="fz-16 l-h-1">B.E, Electronic Er.</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									He is offered us the right guidance when we required an application to promote our
									business.Before hiring them, we had a discussion with their development team and
									they guided us on how to convert our idea into an app.
								</p>
								<div class="feedback-desc">
									<img src="img/client/af2.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Behlim Aftab</h5>
										<span class="fz-16 l-h-1">Business Man</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
							<div class="feedback-box">
								<div class="feedback-pc">
									<i class="icofont-quote-left"></i>
								</div>
								<p>
									I recommend Umair to everyone looking for Web development.I am really impressed by
									their talent and professionalism.We are looking forward to the next collaboration!
								</p>
								<div class="feedback-desc">
									<img src="img/client/sid.jpg" alt="audiobook maker">
									<div class="feedback-bio">
										<h5 class="fz-20 l-h-1">Siddiq Thasariya</h5>
										<span class="fz-16 l-h-1">Business Man</span>
									</div>
								</div>
							</div> <!-- end single feedback -->
						</div> <!-- end feedback-wpr -->
					</div> <!-- end container -->
				</div>
				<!-- End Feedback -->

				<!-- Start Pricing
		============================================= -->
				<div class="price-area de-padding">
					<div class="container">
						<!-- start container -->
						<div class="site-title text-center">
							<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
								My Price
							</span>
							<h2 class="site-tl wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
								How Much I Charge?
							</h2>
						</div>
						<div class="price-wrapper grid-3">
							<!-- start price-area -->
							<div class="price-box mt-20 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s">
								<!-- single price -->
								<div class="price-head">
									<div class="price-icon price-icon-one">
										<i class="icofont-package"></i>
									</div>
									<div class="price-rib">
										<span> Designing </span>
									</div>
									<div class="price-value">
										Starting at<h2><span>$</span>99</h2>
									</div>
								</div>
								<div class="price-info">
									<ul>
										<li><i class="icofont-check"></i> Logo Design</li>
										<li><i class="icofont-check"></i> UI/UX Design </li>
										<li><i class="icofont-check"></i> Web Design </li>
										<li><i class="icofont-check"></i> Availabe On Freelancing </li>
										<li><i class="icofont-check"></i> 24*7 Hours Support </li>
									</ul>
								</div>
								<div class="price-bottom">
									<a href="#contact" class="btn-2">
										Hire me
									</a>
								</div>
							</div> <!-- end single price -->
							<div class="price-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
								<!-- single price -->
								<div class="price-head">
									<div class="price-icon price-icon-two">
										<i class="far fa-file-code"></i>
									</div>
									<div class="price-rib">
										<span> Web Development </span>
									</div>
									<div class="price-value">
										Starting at<h2><span>$</span>299</h2>
									</div>
								</div>
								<div class="price-info">
									<ul>
										<li><i class="icofont-check"></i> Mobile App Development</li>
										<li><i class="icofont-check"></i> NodeJs Projects </li>
										<li><i class="icofont-check"></i> PHP Project </li>
										<li><i class="icofont-check"></i> Availabe on Freelancing </li>
										<li><i class="icofont-check"></i> 24*7 Hours Support</li>
									</ul>
								</div>
								<div class="price-bottom">
									<a href="#contact" class="btn-2 bt-ac">
										Hire me
									</a>
								</div>
							</div> <!-- end single price -->
							<div class="price-box mt-20 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s">
								<!-- single price -->
								<div class="price-head">
									<div class="price-icon price-icon-three">
										<i class="fab fa-wordpress-simple"></i>
									</div>
									<div class="price-rib">
										<span>Wordpress Solution</span>
									</div>
									<div class="price-value">
										Starting at<h2><span>$</span>199</h2>
									</div>
								</div>
								<div class="price-info">
									<ul>
										<li><i class="icofont-check"></i>Woocommerce Store</li>
										<li><i class="icofont-check"></i>Plugin Customization</li>
										<li><i class="icofont-check"></i>PSD to Woocommerce</li>
										<li><i class="icofont-check"></i> Availabe on Freelancing </li>
										<li><i class="icofont-check"></i> 24*7 Hours Support</li>
									</ul>
								</div>
								<div class="price-bottom">
									<a href="#contact" class="btn-2">
										Hire me
									</a>
								</div>
							</div> <!-- end single price-->
						</div> <!-- end price-area -->
					</div> <!-- end container -->
				</div>
				<!-- End Pricing -->

				<!-- Start Promo
		============================================= -->
				<div class="promo-area position-relative">
					<div class="container">
						<!-- start container -->
						<div class="promo-wpr grid-2">
							<div class="promo-left wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
								<h2 class="site-tl mb-30">
									If you have any project, please consult with me.
								</h2>
								<a href="#contact" class="btn-2 wow fadeInUp" data-wow-duration=".5s"
									data-wow-delay=".5s">
									Let’s Talk
								</a>
							</div>
							<div class="promo-right wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
								<img src="img/project.png" alt="thumb">
							</div>
						</div>
					</div> <!-- end container -->
				</div>
				<!-- End Promo -->

				<!-- Start Blog
		============================================= -->
				<div id="blog" class="blog-area de-padding">
					<div class="container">
						<div class="site-title text-center">
							<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Blog
								Posts</span>
							<h2 class="site-tl wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".7s">
								Newly Posted Articles
							</h2>
						</div>
						<div class="blog-wpr blog-sldr owl-carousel owl-theme">
							<div class="blog-box">
								<!-- start single blog -->
								<div class="blog-pic">
									<img src="img/blog/1.jpg" alt="thumb">
								</div>
								<div class="blog-info">
									<ul class="blog-meta">
										<li><i class="icofont-user-alt-4"></i>PAOLA ATKINS </li>
										<li><i class="icofont-clock-time"></i> 15 Feb, 2021</li>
									</ul>
									<a href="page-not-found.html">
										<h5 class="blog-title">
											Get a Comprehensive Computer Science Education in One Place
										</h5>
									</a>
									<div class="blog-btn">
										<a href="page-not-found.html" class="btn-4 hv">
											<i class="icofont-arrow-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- end single blog -->
							<div class="blog-box">
								<div class="blog-pic">
									<img src="img/blog/2.jpg" alt="thumb">
								</div>
								<div class="blog-info">
									<ul class="blog-meta">
										<li><i class="icofont-user-alt-4"></i> HT Brand Studio </li>
										<li><i class="icofont-clock-time"></i> 07 March, 2020</li>
									</ul>
									<a href="page-not-found.html">
										<h5 class="blog-title">
											What is Blog And How is It Diffrent from a Website ?
										</h5>
									</a>
									<div class="blog-btn">
										<a href="page-not-found.html" class="btn-4 hv">
											<i class="icofont-arrow-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- end single blog -->
							<div class="blog-box">
								<div class="blog-pic">
									<img src="img/blog/3.png" alt="thumb">
								</div>
								<div class="blog-info">
									<ul class="blog-meta">
										<li><i class="icofont-user-alt-4"></i> Philip Hobs</li>
										<li><i class="icofont-clock-time"></i> 04 Jan, 2018</li>
									</ul>
									<a href="page-not-found.html">
										<h5 class="blog-title">
											What Is SEO / Search Engine Optimization?
										</h5>
									</a>
									<div class="blog-btn">
										<a href="page-not-found.html" class="btn-4 hv">
											<i class="icofont-arrow-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- end single blog -->
							<div class="blog-box">
								<div class="blog-pic">
									<img src="img/blog/4.jpg" alt="thumb">
								</div>
								<div class="blog-info">
									<ul class="blog-meta">
										<li><i class="icofont-user-alt-4"></i> Dashveenjit Kaur </li>
										<li><i class="icofont-clock-time"></i>09 June, 2021</li>
									</ul>
									<a href="page-not-found.html">
										<h5 class="blog-title">
											Oracle is expanding its cloud services in India’s public sector
										</h5>
									</a>
									<div class="blog-btn">
										<a href="page-not-found.html" class="btn-4 hv">
											<i class="icofont-arrow-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- end single blog -->
							<div class="blog-box">
								<div class="blog-pic">
									<img src="img/blog/5.jpg" alt="thumb">
								</div>
								<div class="blog-info">
									<ul class="blog-meta">
										<li><i class="icofont-user-alt-4"></i> Janell Hullquist </li>
										<li><i class="icofont-clock-time"></i>13 Aug, 2021</li>
									</ul>
									<a href="page-not-found.html">
										<h5 class="blog-title">
											Web Design, Cyber Security Added to Southern Adventist University Programs
										</h5>
									</a>
									<div class="blog-btn">
										<a href="page-not-found.html" class="btn-4 hv">
											<i class="icofont-arrow-right"></i>
										</a>
									</div>
								</div>
							</div> <!-- end single blog -->
						</div>
					</div> <!-- end container -->
				</div>
				<!-- End Blog -->

			</main>

			<div class="clearfix"></div>

			<!-- Start Footer
	============================================= -->
			<footer id="contact" class="footer">
				<div class="container">
					<!-- start container -->
					<div class="site-title text-center pt-80">
						<span class="top-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".6s">Contact</span>
						<h2 class="site-tl wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".8s">
							Get in Touch
						</h2>
					</div>
					<div class="row">
						<!-- start row -->
						<div class="col-md-7">
							<div class="contact-area mb-20">
								<div class="contact-left mt-20">

									<form class="contact-form" id="contact-form" method="POST" action="#">
										<div class="row g-4">
											<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".2s">
												<input type="text" name="subject" class="form-control input-style-2"
													placeholder="Subject">
											</div>
											<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".3s">
												<input type="text" name="name" class="form-control input-style-2"
													placeholder="Your name">
											</div>
											<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".4s">
												<input type="email" name="email" class="form-control input-style-2"
													placeholder="Your Email Here">
											</div>
											<div class="col-12 wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".5s">
												<textarea class="form-control input-style-2" name="message"
													placeholder="Drop Message"></textarea>
											</div>
											<div class="col-4 wow fadeInUp" data-wow-duration=".6s"
												data-wow-delay=".6s">
												<button type="submit" class="theme-btn mt-30" name="submit">
													Send Me
												</button>
											</div>
											<div class="col-8 mt-50">
												<p class="form-message"></p>
											</div>
										</div>
									</form>
								</div>
							</div> <!-- end contact-area -->
						</div> <!-- end col-7 -->
						<div class="col-md-5">
							<div class="contact-right mt-40 contact-left">
								<ul>
									<li>
										<div class="addr mt-10 wow fadeInUp" data-wow-duration=".3s"
											data-wow-delay=".3s">
											<div class="contact-right-icon one">
												<i class="icofont-google-map"></i>
											</div>
											<p class="mb-0 mt-10">
												Ahmedabad, India
											</p>
										</div>
									</li>
									<li>
										<div class="addr mt-10 wow fadeInUp" data-wow-duration=".5s"
											data-wow-delay=".5s">
											<div class="contact-right-icon two">
												<i class="icofont-envelope"></i>
											</div>
											<p class="mb-0 mt-10">
												umairmithawala007@gmail.com
											</p>
										</div>
									</li>
									<li>
										<div class="addr mt-10 wow fadeInUp" data-wow-duration=".7s"
											data-wow-delay=".7s">
											<div class="contact-right-icon three">
												<i class="icofont-brand-whatsapp"></i>
											</div>
											<p class="mb-0 mt-10">
												+91 840 130 2846
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div> <!-- end col-5 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
				<div class="copyright-area">
					<!-- start copyright -->
					<div class="container">
						<!-- container -->
						<div class="row" style="margin-left:30px; margin-top: 46px;">
							<div class="col-md-5 mt-50">
								<div class="copyright-left wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
									<span class="copyright-text"> Thanks For Visiting</span>
								</div>
							</div> <!-- end col-5 -->
							<div class="col-md-4 mt-50">
								<div class="copyright-right wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".8s">
									<div class="copyright-menu">
										<a href="#">Faqs /</a>
										<a href="#">privacy policy /</a>
										<a href="#">services</a>
									</div>
								</div>
							</div> <!-- end col-4 -->
							<div class="col-md-3 mt-50">
								<div class="copyright-social wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
									<ul class="footer-social">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://twitter.com/home?lang=en"><i
													class="fab fa-twitter"></i></a></li>
										<li><a href="https://www.linkedin.com/in/umair-mithawala-7b990b195/"><i
													class="fab fa-linkedin-in"></i></a></li>
										<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div> <!-- end col-3 -->
						</div>
					</div> <!-- end container -->
				</div> <!-- end copyright area -->
			</footer>
			<!-- End Footer-->

			<!-- Start Scroll top
	============================================= -->
			<a href="#home" id="scrtop" class="smooth-scroll"><i class="icofont-rounded-up"></i></a>
			<!-- End Scroll top-->

			<!-- CURSOR -->
			<div class="mouse-cursor cursor-outer"></div>
			<div class="mouse-cursor cursor-inner"></div>
			<!-- /CURSOR -->
		</div>
	</div> <!-- Mouse Cursor End -->

	<!-- jQuery Frameworks 
    ============================================= -->

	<script src="assets/js/jquery-1.12.4.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.appear.min.js"></script>
	<script src="assets/js/parallaxie.min.js"></script>
	<script src="assets/js/simpleParallax.min.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/progress-bar.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.mixitup.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/count-to.js"></script>
	<!-- <script src="assets/js/contact-form.js"></script> -->
	<script src="assets/js/typed.min.js"></script>
	<script src="assets/js/YTPlayer.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from www.themetum.com/wokoya/topbar/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 13:47:05 GMT -->

</html>