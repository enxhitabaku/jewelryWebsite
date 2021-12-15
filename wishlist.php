<?php 
$current_page = 'wishlist';
?>
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

	<!-- responsive -->
	<link rel="stylesheet" href="./assets/css/responsive.css">

	<!-- waves -->
	<link rel="stylesheet" href="./assets/css/waves.css">

	<!-- main style -->
	<link rel="stylesheet" href="./assets/css/main.css">

	<!-- navbar style -->
	<link rel="stylesheet" href="./assets/css/navbar.css">
	<link rel="stylesheet" href="./assets/css/meanmenu.min.css">

	<!-- wishlist page style -->
	<link rel="stylesheet" href="./assets/css/wishlist.css">
	
	<!-- footer style -->
	<link rel="stylesheet" href="./assets/css/footer.css">

</head>

<body>

	<!-- Navbar -->
	<?php 
	require 'assets/php/navbar.php';
	?>
	<!-- end Navbar -->

	<!-- BreadCrum Section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Pietra Di Luna</p>
					<h1>Wishlist <span id="wishlistNumber">(3)</span></h1>
				</div>
				</div>
			</div>
		</div>
	</div> <!-- end BreadCrum Section -->


	<!-- Wishlist info section -->
	<div class="container-fluid info-section mt-80">
		<div class="row justify-content-center">
			<h5 class="col-xl-4 col-lg-6 col-10 text-center">Sogni il regalo perfetto? Fai sapere alle persone che ami cosa desideri. 
						Crea il tuo Account, aggiungi le tue creazioni preferite 
						alla Wishlist e condividila con chi vuoi. Se non effettui 
						il login, la Wishlist sarà cancellata al termine della sessione.</h5>
		</div>
		
		<div class="row justify-content-center mt-4">
			<button type="button" class="login-button col-lg-2 col-8 w-100 waves-effect waves-light">Log in or Register <i class="far fa-user"></i></button>
		</div>

	</div> <!-- end Wishlist info section -->

	<!-- Wishlist -->
	<div class="container-fluid mb-150">
		<div class="row justify-content-center mt-5" id="row125">
			<div class="col-xl-7 col-lg-10 col-11">
				<hr>
			</div>
			<div class="col-xl-7 col-lg-10 col-10">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-10 text-lg-left text-center wishlist-product-img">
						<img src="assets/img/HomePage/alissa-de-leva-DeM8mEQf138-unsplash.jpg" alt="">
					</div>
					<div class="col-xl-4 col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-5">
						<h5>Product Name...</h5>
						<div class="row justify-content-between">
							<div class="col-5">
								<p class="text-secondary">Missura</p>
							</div>
							<div class="col-5 text-lg-left text-right">
								<p class="text-secondary">20</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3">
								<p class="text-secondary">Product id</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3 text-lg-left text-right">
								<p class="text-secondary">125</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-4">
						<div class="row justify-content-between">
							<div class="col-5 align-self-center">
								<h4>$ 2444</h4>
							</div>
							<div class="col-xl-3 col-lg-5 col-3 text-lg-left text-right">
								<button class="remove-button waves-effect waves-light w-100" id="remove125"><i class="far fa-trash-alt"></i></button>
							</div>
							<div class="col-12 mt-80">
								<button type="button" class="login-button w-100 waves-effect waves-light">Visit product <i class="fab fa-facebook-square"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-5" id="row124">
			<div class="col-xl-7 col-lg-10 col-11">
				<hr>
			</div>
			<div class="col-xl-7 col-lg-10 col-10">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-10 text-lg-left text-center wishlist-product-img">
						<img src="assets/img/HomePage/alissa-de-leva-DeM8mEQf138-unsplash.jpg" alt="">
					</div>
					<div class="col-xl-4 col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-5">
						<h5>Product Name...</h5>
						<div class="row justify-content-between">
							<div class="col-5">
								<p class="text-secondary">Missura</p>
							</div>
							<div class="col-5 text-lg-left text-right">
								<p class="text-secondary">20</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3">
								<p class="text-secondary">Product id</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3 text-lg-left text-right">
								<p class="text-secondary">124</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-4">
						<div class="row justify-content-between">
							<div class="col-5 align-self-center">
								<h4>$ 2444</h4>
							</div>
							<div class="col-xl-3 col-lg-5 col-3 text-lg-left text-right">
								<button class="remove-button waves-effect waves-light w-100" id="remove124"><i class="far fa-trash-alt"></i></button>
							</div>
							<div class="col-12 mt-80">
								<button type="button" class="login-button w-100 waves-effect waves-light">Visit product <i class="fab fa-facebook-square"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-5" id="row123">
			<div class="col-xl-7 col-lg-10 col-11">
				<hr>
			</div>
			<div class="col-xl-7 col-lg-10 col-10">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-10 text-lg-left text-center wishlist-product-img">
						<img src="assets/img/HomePage/alissa-de-leva-DeM8mEQf138-unsplash.jpg" alt="">
					</div>
					<div class="col-xl-4 col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-5">
						<h5>Product Name...</h5>
						<div class="row justify-content-between">
							<div class="col-5">
								<p class="text-secondary">Missura</p>
							</div>
							<div class="col-5 text-lg-left text-right">
								<p class="text-secondary">20</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3">
								<p class="text-secondary">Product id</p>
							</div>
							<div class="col-5 mt-lg-4 mt-3 text-lg-left text-right">
								<p class="text-secondary">123</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 col-12 mt-xl-4 mt-lg-2 mt-4">
						<div class="row justify-content-between">
							<div class="col-5 align-self-center">
								<h4>$ 2444</h4>
							</div>
							<div class="col-xl-3 col-lg-5 col-3 text-lg-left text-right">
								<button class="remove-button waves-effect waves-light w-100" id="remove123"><i class="far fa-trash-alt"></i></button>
							</div>
							<div class="col-12 mt-80">
								<button type="button" class="login-button w-100 waves-effect waves-light">Visit product <i class="fab fa-facebook-square"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Empty wishlist default- not displayed-->
		<div class="row justify-content-center mt-5 d-none" id="emptyWishlist">
			<div class="col-xl-7 col-lg-10 col-11">
				<hr>
			</div>
			<div class="col-xl-6 col-lg-9 col-10">
				<span class="text-secondary"> Wishlist is empty</span>
			</div>
			<div class="col-xl-7 col-lg-10 col-11">
				<hr>
			</div>
		</div>
	</div> <!-- end Wishlist -->

	<!-- alert -->
	<div class="wishlist-alert row justify-content-end fixed-top mr-3 d-none">
		<div class="alert alert-warning alert-dismissible fade show text-center col-lg-4 align-self-center" role="alert" style="top: 26px; height: 70px;">
			<h6 class="mt-3"><i class="far fa-check-circle"></i> Product removed from wishlist. 
				<button type="button" class="close alert-close waves-effect waves-light mt-3">&#10006;</button>
			</h6>
		</div>
	</div> <!-- end alert -->
	
	<!-- Footer -->
	<?php 
	require 'assets/php/footer.php';
	?>
	<!-- end Footer -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>

	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>

	<!-- Mean Menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>

	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>

	<!-- main js -->
	<script src="assets/js/main.js"></script>

	<!-- wishlist js -->
	<script src="assets/js/wishlist.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>

	<!-- waves js -->
	<script src="assets/js/waves.js"></script>

</body>

</html>