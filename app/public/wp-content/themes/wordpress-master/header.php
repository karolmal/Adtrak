<?php
/*-----------------------------------------------------------------------------------*/
/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); // show the blog name, from settings 
		?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page 
		?>
	</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
	?>

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. 
	?>
	<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

	<?php wp_head();
	// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
	// (right here) into the head of your website. 
	// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
	// Move it if you like, but I would keep it around.
	?>

</head>

<body <?php body_class();
		// This will display a class specific to whatever is being loaded by Wordpress
		// i.e. on a home page, it will return [class="home"]
		// on a single post, it will return [class="single postid-{ID}"]
		// and the list goes on. Look it up if you want more.
		?>>

	<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<div class="overlay-content">
			<a href="#">Kitchen Design</a></li>
			<a href="#">Cabin ets & Doors</a>
			<a href="#">Worktops</a>
			<a href="#">Showroom</a>
			<a href="#">Gallery</a>
		</div>
	</div>

	<header id="masthead" class="site-header">

		<div class="bg-dark d-none d-xl-block">
			<div class="container px-2">
				<nav class="top-nav">
					<ul class="d-flex align-items-center justify-content-end">
						<li class="top-nav-item"><a class="text-white text-decoration-none">ABOUT US</a></li>
						<li class="top-nav-item"><a class="text-white text-decoration-none">OUR PROCESS</a></li>
						<li class="top-nav-item"><a class="text-white text-decoration-none">FAQS</a></li>
						<li class="top-nav-item"><a class="text-white text-decoration-none">TESTIMONIALS</a></li>
						<li class="top-nav-item"><a class="text-white text-decoration-none">GET IN TOUCH</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="container block px-2 d-flex justify-content-between align-items-center">
			<div class="d-flex flex-column">
				<img src="/wp-content/uploads/2024/03/adtrack-logo.png" alt="Adtrack Logo" loading="lazy" width="160px">
				<p class="logo-text fw-300">Kitchens</p>
			</div>
			<nav id="menu-primary" class="d-none d-xl-block">
				<ul class="d-flex align-items-center">
					<li><a href="#">Kitchen Design</a></li>
					<span class="box d-inline-block"></span>
					<li><a href="#">Cabin ets &#38; Doors</a></li>
					<span class="box d-inline-block"></span>
					<li><a href="#">Worktops</a></li>
					<span class="box d-inline-block"></span>
					<li><a href="#">Showroom</a></li>
					<span class="box d-inline-block"></span>
					<li><a href="#">Gallery</a></li>
				</ul>
			</nav>
			<div class="contact-info d-flex align-items-center">
				<div class="phone-info  flex-column justify-content-between align-items-end d-none d-xxl-block">
					<p class="text-end call-text ">Call our showroom</p>
					<div class="d-flex align-items-center">
						<img src="/wp-content/uploads/2024/03/icons8-phone-50.png" width="18px" alt="Phone Image" class="me-2" loading="lazy">
						<a href="tel:08000000000" class="call-number text-decoration-none">0800 000 0000</a>
					</div>
				</div>
				<a href="#" class="btn btn-orange d-none d-xl-block">Book an Appointment</a>
				<span class="d-block d-xl-none nav-open" onclick="openNav()">&#9776;</span>
			</div>
		</div>

	</header>
	<!-- #masthead .site-header -->
	<div id="hero">
		<div class="container px-2">

			<div class="row mt-0">
				<div class="col-lg-7 d-flex " style="position: relative;">
					<img class="banner-left-image" src="/wp-content/uploads/2024/03/95b7088c3799ffefe25a1e1482ad85bd.jpg" alt="Banner Image" loading="lazy">
					<div class="orange-box text-center d-none d-lg-block" style="width: fit-content; position: absolute; margin-top: 50px;">
						<p class="mb-0">SALE</p>
						<p>now on</p>
					</div>
				</div>
				<div class="col-lg-5 d-flex">
					<div class="right-box" style="padding-top: 50px;">
						<div class="d-flex align-items-center bg-white p-5 hero-title-box">
							<h2 class="hero-title">A <span class="orange-italic">wide variety</span> of<br>kitchens at<br><span class="orange-italic">unbeatable prices</span>.</h2>
						</div>
						<div class="hero-right-bottom">
							<ul>
								<li>Work with our expert team to create your kitchen</li>
								<li>Free no obligation quotes</li>
								<li>Hundreds of colours & styles to choose from</li>
							</ul>
							<div class="d-flex flex-lg-column flex-xl-row align-items-start">
								<a href="" class="btn btn-secondary mb-lg-4 me-4">Our Kitchen</a>
								<a href="" class="btn btn-orange">Book an Appointment</a>
							</div>
							<div style="height: 150px;">

							</div>
						</div>
					</div>
				</div>
			</div>







		</div>
	</div>

	


	<main><!-- start the page containter -->