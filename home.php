<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Pietra di Luna | Home</title>

	<!-- Custom CSS -->

	<!-- Custom Font Awesome Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="all"
		rel="stylesheet">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="./assets/img/favicon.png">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="./assets/css/all.min.css">

	<!-- bootstrap -->
	<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

	<!-- owl carousel -->
	<link rel="stylesheet" href="./assets/css/owl.carousel.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="./assets/css/magnific-popup.css">

	<!-- animate css -->
	<link rel="stylesheet" href="./assets/css/animate.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="./assets/css/responsive.css">
	
	<!-- navbar style -->
	<link rel="stylesheet" href="./assets/css/navbar.css">
	<link rel="stylesheet" href="./assets/css/meanmenu.min.css">

	<!-- main style -->
	<link rel="stylesheet" href="./assets/css/main.css">
	
	<!-- homepage style -->
	<link rel="stylesheet" href="./assets/css/home.css">

	<!-- shop style -->
	<link rel="stylesheet" href="./assets/css/shop.css">

	<!-- footer style -->
	<link rel="stylesheet" href="./assets/css/footer.css">

	<!-- Custom Style To Move on Spreadsheet -->
	<style>
		/* Update Our Products Card Image Size */
		.product-image a img {
			width: 250px;
			height: 250px;
		}

		/* Update The Sale % on the circle in the first adv banner */
		.inner-price {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		/* Responsive fonts of Card Btns */
		

		/* Reorder Btn on Second Adv Banner */
		#monthlyDealBtn{
			text-align: center;
    		min-width: 155px;
		}

		/* Show/Hide Elements on Mobile - Product Section */
		#productBtnContainer{
			display: flex;
			justify-content: center;
			display: none;
		}

		@media (max-width: 991.98px) { 

			#productBtnContainer{
				display: flex;
			}
			#product-row{
				display: none;
			}

			
		/* Responsive fonts for Main Buttons Of the page */
			
		}



	</style>
</head>

<body>

	<!-- Navbar -->
	<?php 
	require 'assets/php/navbar.php';
	?>
	<!-- end Navbar -->

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Pietra di Luna</p>
								<h1>A Daydream.</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Explore Products</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Pietra di Luna</p>
								<h1>100% Handmade</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Explore Products</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Pietra di Luna</p>
								<h1>Get December Discount!</h1>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Explore Products</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon text-center">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content text-center">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<section class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>
							Pietra di Luna offers you the best collections of jewels in robust stones, precious and
							semi-precious stones,
							worked with the best techniques to offer unique products and quality jewels.
						</p>
					</div>
				</div>
			</div>

			<!-- Show on Mobile -->
			<div id="productBtnContainer">
				<a href="cart.html" class="cart-btn mainButtons">Discover Now</a>
			</div>

			<!-- Hide on Mobile -->
			<div class="row" id="product-row">
				<div class="col-sm-12 col-lg-4 col-md-4 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/HomePage/GIOVANNI_RASPINI.jpeg"
									alt="">
							</a>
						</div>
						<h3>Giovanni Raspini</h3>
						<p class="product-price"><span>BRACELET</span>195&euro;</p>
						
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fa-regular fa-heart"></i>Wishlist</a>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-bag"></i>Buy Now</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-12 col-lg-4 col-md-4 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/HomePage/Azul.jpg" alt=""></a>
						</div>
						<h3>Azul</h3>
						<p class="product-price"><span>NECKLACE</span>145&euro;</p>
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fa-regular fa-heart"></i>Wishlist</a>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-bag"></i>Buy Now</a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-12 col-lg-4 col-md-4 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="./assets/img/HomePage/Music.jpg" alt=""></a>
						</div>
						<h3>Music</h3>
						<p class="product-price"><span>NECKLACE EARRINGS AND BRACELET</span>185&euro;</p>
						<div class="container">
							<div class="row">
								<div class="col-sm-12 col-md-6 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fa-regular fa-heart"></i>Wishlist</a>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-bag"></i>Buy Now</a>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product section -->


	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
		<div class="container">
			<div class="row clearfix">
				<!--Image Column-->
				<div class="image-column col-lg-6">
					<div class="image">
						<div class="price-box">
							<div class="inner-price">
								<span class="price">
									<strong>-30%</strong>
								</span>
							</div>
						</div>
						<img src="./assets/img/HomePage/advEarring.png" alt="">
					</div>
				</div>
				<!--Content Column-->
				<div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
					<h4>Special EARRINGS</h4>
					<div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique!
						Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit
						voluptatem accusant</div>
					<!--Countdown Timer-->
					<div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2020/2/01">
							<div class="counter-column">
								<div class="inner"><span class="count" id="day">00</span>Days</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count" id="hour">00</span>Hours</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count" id="minute">00</span>Mins</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count" id="second">00</span>Secs</div>
							</div>
						</div>
					</div>
					<a href="cart.html" class="cart-btn mt-3 mainButtons" id="monthlyDealBtn">Buy Now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end cart banner section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150 mt-150">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<video src="assets/img/HomePage/video.mp4" class="w-100" autoplay muted></video>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 1999</p>
						<h2>We are <span class="orange-text">Pietra di Luna</span></h2>
						<p>Pietra di Luna was born from the union of two prestigious jewelry brands, namely <b>Dernier
								Natìf</b> and <b>McLoud</b>. All the materials that compose our jewels are artfully
							selected and checked in the smallest details, from the origin, to the type of material, to
							create objects of excellent craftsmanship.</p>
						<p>Within our site you will find a selection of objects and items from which to choose the one
							that best suits you.</p>
						<a href="about.html" class="boxed-btn mt-4 mainButtons">Know More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<!-- shop banner -->
	<section class="shop-banner">
		<div class="container">
			<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
			<div class="sale-percent"><span>Sale! <br> Up to</span>50% <span>off</span></div>
			<a href="shop.html" class="cart-btn btn-lg mainButtons">Shop Now</a>
		</div>
	</section>
	<!-- end shop banner -->

	<!-- Work With Us -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Work</span>With Us</h3>
						<p>Become part of a team that makes their work a passion!</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html">
							<div class="latest-news-bg news-bg-1"></div>
						</a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Jewelry design assistant</a></h3>
							<p class="excerpt">Job Description</p>
							<a href="single-news.html" class="read-more-btn">read more <i
									class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html">
							<div class="latest-news-bg news-bg-2"></div>
						</a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Jewellery Design Lecturer</a></h3>
							<p class="excerpt">Job Description</p>
							<a href="single-news.html" class="read-more-btn">read more <i
									class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news.html">
							<div class="latest-news-bg news-bg-3"></div>
						</a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Vacant Job Position</a></h3>
							<p class="excerpt">Job Description</p>
							<a href="single-news.html" class="read-more-btn">read more <i
									class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn mainButtons">Join Us</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end Work With Us -->


	<!-- Footer -->
	<?php 
	require 'assets/php/footer.php';
	?>
	<!-- end Footer -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<!-- count down -->
	<script src="assets/js/countdown.js"></script>

	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>

	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>

	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	
	<!-- main js -->
	<script src="assets/js/main.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>

</body>

</html>