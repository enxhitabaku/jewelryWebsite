<?php 
$current_page = 'workwithus';
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

	<!-- main style -->
	<link rel="stylesheet" href="./assets/css/main.css">

	<!-- navbar style -->
	<link rel="stylesheet" href="./assets/css/navbar.css">
	<link rel="stylesheet" href="./assets/css/meanmenu.min.css">

	<!-- homepage style -->
	<link rel="stylesheet" href="./assets/css/home.css">

	<!-- work with Us -->
	<link rel="stylesheet" href="./assets/css/workwith.css">

	<!-- footer style -->
	<link rel="stylesheet" href="./assets/css/footer.css">

	<!-- animate style -->
	<link rel="stylesheet" href="./assets/css/animate.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="./assets/css/responsive.css">

	<!-- waves -->
	<link rel="stylesheet" href="./assets/css/waves.css">


</head>

<body>

	<!-- Navbar -->
	<?php 
	require 'assets/php/navbar.php';
	?>
	<!-- end Navbar -->

	<!-- latest news -->
	<div class="latest-news mt-100">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-100 mt-100">
					<h3 class="text-center">Posti di Lavori <span class="orange-text">liberi.</span></h3>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box text-center">
							<h3><a href="single-news.html">Jewellery Design Lecturer</a></h3>
							<p class="blog-meta text-center">
								<span class="date"><i class="fas fa-number"></i>2 post available</span>
							</p>
							<p class="excerpt pb-5"><i class="fas fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box text-center">
							<h3><a href="single-news.html">Jewelry design assistant</a></h3>
							<p class="blog-meta text-center">
								<span class="date"><i class="fas fa-number"></i>2 post available</span>
							</p>
							<p class="excerpt pb-5"><i class="fas fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-150">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box text-center">
							<h3><a href="single-news.html">Vacant Job Position</a></h3>
							<p class="blog-meta text-center">
								<span class="date"><i class="fas fa-number"></i>1 post available</span>
							</p>
							<p class="excerpt pb-5"><i class="fas fa-info-circle"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<div class="container mb-80 mt-80 animated div1">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="">Entra a far parte di un team che fa del suo lavoro una <span class="orange-text">passione!</span></h2>
			</div>
		</div>
	</div><br>

	<!-- work with us form -->
	<div class="work-with-from-section mt-150 mb-150">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<div class="form-title">
						<p>Compila il form che trovi qui sotto con i dati richiesti e descrivici le tue competenze.
							Ti risponderemo il più presto possibile.</p>
					</div>
					<div class="work-with-form">
						<form type="POST" id="workWithForm">
							<p>
								<input type="text" placeholder="Nome" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Telefono" name="phone" id="phone_number">
								<input type="text" placeholder="Oggetto" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Esperienze"></textarea></p>
							<div class="row justify-content-between">
								<div id="contactBtn-container" class="col-lg-3 col-12"><button id="workWithSubmit" type="submit" class="w-100">Invia</button></div>
								<span id="submitResponse" class="h6 col-lg-6 col-12 align-self-center text-lg-right text-center mt-lg-0 mt-3"></span>	
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 align-self-center">
					<img src="./assets/img/WorkWithUs/gruppo-600x409.jpg" alt="" class="w-100 img-fluid rounded">
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

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

	<!-- waves js -->
	<script src="assets/js/waves.js"></script>
	
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
	<!-- work with page js -->
	<script src="assets/js/workwith.js"></script>

	<!-- footer js-->
	<script src="assets/js/footer.js"></script>

	<script>
		// Animation 
		const observer = new IntersectionObserver(entries => {
			// Loop over the entries
			entries.forEach(entry => {
				// If the element is visible
				if (entry.isIntersecting) {
					// Add the animation class
					entry.target.classList.add('bounceInUp');
				}
			});
		});
		observer.observe(document.querySelector('.div1'));
	</script>

</body>

</html>