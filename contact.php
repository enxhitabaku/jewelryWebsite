<?php 
$current_page = 'contact';
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
	<link rel="icon" type="image/png" href="assets/img/HomePage/website-icon.png">
	
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

	<!-- bootstrap -->
	<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="./assets/css/responsive.css">
	
	<!-- main style -->
	<link rel="stylesheet" href="./assets/css/main.css">

	<!-- homepage style -->
	<link rel="stylesheet" href="./assets/css/home.css">

	<!-- navbar style -->
	<link rel="stylesheet" href="./assets/css/navbar.css">
	<link rel="stylesheet" href="./assets/css/meanmenu.min.css">

	<!-- Contact Us -->
	<link rel="stylesheet" href="./assets/css/contact.css">

	<!-- footer style -->
	<link rel="stylesheet" href="./assets/css/footer.css">

</head>

<body>

	<!-- Navbar -->
	<?php 
	require 'assets/php/navbar.php';
	?>
	<!-- end Navbar -->

	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
			  <div class="breadcrumb-text">
				<p>Supporto 24 su 24</p>
				<h1>Contattaci</h1>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h3 class="text-center text-md-left">Hai qualche <span class="orange-text">domanda</span>?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="contactForm">
							<p>
								<input type="text" placeholder="Nome" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Telefono" name="phone" id="phone">
								<input type="text" placeholder="Oggetto" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Messagio"></textarea></p>
							<div class="row justify-content-between">
								<div id="contactBtn-container" class="col-lg-2 col-12"><button id="contactSubmit" type="submit" class="w-100">Invia</button></div>
								<span id="submitResponse" class="col-lg-6 col-12 h6 align-self-center text-lg-right text-center mt-lg-0 mt-3"></span>	
							</div>
							
						</form>
					</div>
				</div>
				<div class="col-lg-4 text-center text-md-left">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map mr-3"></i> Addressa di Negozio</h4>
							<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock mr-3"></i> Quando siamo apperto?</h4>
							<p>LUN - Venerdi: 8 to 9 PM <br> SAB - Domenica: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book mr-3"></i> Contattaci</h4>
							<p>Telefono: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Trova il nostro Negozio</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->

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

	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>

	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>

	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
	<!-- contact js -->
	<script src="assets/js/contact.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>

</body>

</html>