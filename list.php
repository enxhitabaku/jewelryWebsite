<?php 
$current_page = 'list';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-sca  le=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Pietra di Luna | Shop</title>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="./assets/css/multiproduct.css">
	

	<!-- Custom Font Awesome Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="all"
		rel="stylesheet">

	<!-- favicon -->
	<link rel="icon" type="image/png" href="assets/img/HomePage/website-icon.png">

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

	<!-- shop style -->
	<link rel="stylesheet" href="./assets/css/shop.css">

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
				<p>Pietra di luna</p>
				<h1>Shop</h1>
			  </div>
			</div>
		  </div>
		</div>
	</div>

	<!-- Side Bar -->
	<section id="main-section">
		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-2" id="sidebar">
				<div class="filter-container">

					<div class="row">
						<div class="col">
							<h2>Filtri</h2>
						</div>
					</div>

					<div class="row">
						<div class="col"> 
							<button onclick="togleArrow(this)" class="btn btn-light" type="button" data-toggle="collapse" data-target="#category-collapse" aria-expanded="false" aria-controls="category-collapse">
								Categoria 
								<i class="arrow down"></i> 
							</button>
						</div>
						<div class="col">
							<div class="collapse multi-collapse" id="category-collapse">
								<div class="card card-body">
									<form action="/action_page.php">
										<input type="checkbox" id="vintage" name="vintage" value="Vintage">
										<label for="vintage">Vintage</label><br>
										<input type="checkbox" id="necklace" name="necklace" value="necklace">
										<label for="earings">Necklace</label>
										<br>
										<input type="checkbox" id="earings" name="earings" value="Earings">
										<label for="earings">Earings</label>
										<br>
									</form> 
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col"> 
							<button onclick="togleArrow(this)" class="btn btn-light" type="button" data-toggle="collapse" data-target="#color-collapse" aria-expanded="false" aria-controls="color-collapse">
								Colore
								<i class="arrow down"></i> 
							</button>
						</div>
						<div class="col">
							<div class="collapse multi-collapse" id="color-collapse">
								<form action="/action_page.php">
									<input type="checkbox" id="blue" name="blue" value="Blue">
									<label for="blue">Rosso</label><br>
									<input type="checkbox" id="red" name="red" value="Red">
									<label for="red">Verde</label>
									<br>
									<input type="checkbox" id="gray" name="gray" value="Gray">
									<label for="Gray">Grigo</label>
									<br>
								</form> 
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col"> 
							<button onclick="togleArrow(this)" class="btn btn-light" type="button" data-toggle="collapse" data-target="#price-collapse" aria-expanded="false" aria-controls="price-collapse">
								Prezzo
								<i class="arrow down"></i> 
							</button>
						</div>
						<div class="col">
							<div class="collapse multi-collapse" id="price-collapse">
								<div class="card card-body">
									<div class="price-container">
										<label for="minPrice">&nbsp;Da&nbsp;</label>
										<input type="number" oninput=" negateNegativePrice(this)" value="0" placeholder="0.00" name="minPrice" id="minPrice">
									
										<label for="maxPrice">&nbsp;All&nbsp;</label>
										<input type="number" oninput=" negateNegativePrice(this)" value="1" placeholder="500.00" name="maxPrice" id="maxPrice">
									</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col"> 
						<button onclick="togleArrow(this)" class="btn btn-light" type="button" data-toggle="collapse" data-target="#discount-collapse" aria-expanded="false" aria-controls="discount-collapse">
							Affare
							<i class="arrow down"></i> 
						</button>
					</div>
					<div class="col">
						<div class="collapse multi-collapse" id="discount-collapse">
							<div class="card card-body">
									<form action="/action_page.php">
										<input type="checkbox" id="nodiscount" name="nodiscount" value="nodiscount">
										<label for="nodiscount">No Affare</label><br>
										<input type="checkbox" id="upto20" name="upto20" value="upto20">
										<label for="upto20">Finno all 20%</label>
										<br>
										<input type="checkbox" id="upto50" name="upto50" value="upto50">
										<label for="upto50">Finno all 50%</label>
										<br>
									</form> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-9 col-lg-10" id="product-section">
				<div class="container productCards-container">

					<!-- Product Cards-->
					<div class="row">
						<div class="col-sm-12 col-lg-4 col-md-4 text-center">
							<div class="row single-product-item waves-effect waves-dark" style="background-image: url('./assets/img/HomePage/product1.jpg');">
								<div class="add-wishlist waves-effect waves-dark">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>	
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-4 text-center">
							<div class="row single-product-item waves-effect waves-light" style="background-image: url('./assets/img/HomePage/product2.jpg');">
								<div class="add-wishlist waves-effect waves-light">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-4 text-center">
							<div class="row single-product-item waves-effect waves-light" style="background-image: url('./assets/img/HomePage/product3.jpg');">
								<div class="add-wishlist waves-effect waves-light">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-4 text-center mt-5">
							<div class="row single-product-item waves-effect waves-dark" style="background-image: url('./assets/img/HomePage/product1.jpg');">
								<div class="add-wishlist waves-effect waves-dark">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>	
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-4 text-center mt-5">
							<div class="row single-product-item waves-effect waves-light" style="background-image: url('./assets/img/HomePage/product2.jpg');">
								<div class="add-wishlist waves-effect waves-light">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-4 col-md-4 text-center mt-5">
							<div class="row single-product-item waves-effect waves-light" style="background-image: url('./assets/img/HomePage/product3.jpg');">
								<div class="add-wishlist waves-effect waves-light">
									<span class="fa-regular fa-heart"></span>
								</div>
								<button class="learn-more">
									<span class="learn-circle" aria-hidden="true">
									<span class="icon arrow"></span>
									</span>
									<span class="button-text">Learn More</span>
								</button>
							</div>
							<div class="col-12">
								<span class="product-text">
									YILVER AND TURQUOISE EARRINGS
								</span>
							</div>
						</div>

					</div>	
				</div>
				
				<!-- END Product Cards -->
		</div>
	</section>

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

	<!-- Mean Menu -->
	<script src="assets/js/sticker.js"></script>

	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!-- main js -->
	<script src="assets/js/main.js"></script>

	<!-- waves js -->
	<script src="assets/js/waves.js"></script>

	<!-- SideMenu.js -->
	<script src="assets/js/sidemenu.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>

</body>

</html>