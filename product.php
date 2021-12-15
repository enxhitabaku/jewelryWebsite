<?php 
$current_page = 'product';
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

	<!-- single product style -->
	<link rel="stylesheet" href="./assets/css/singleproduct.css">

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
		a.cart-btn {
			font-size: 1vw;
		}

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
			a.mainButtons{
				font-size: 2.3vw;
			}
		}



	</style>
</head>

<body class="">

	<!-- Navbar -->
	<?php 
	require 'assets/php/navbar.php';
	?>
	<!-- end Navbar -->

<!-- CODE IN HERE -->
	<section class="container-fluid product-page-div">
			<div class="row mt-150 mb-150 pt-5 justify-content-center">
				<!-- Product Carousel section -->
				<div class="col-xl-5 col-lg-7 col-12">
					<div class="row justify-content-center">
						<div class="col-12 product-carousel owl-theme">
							<img src="assets/img/HomePage/cover2.jpg" alt="" class="item product-images">
							<img src="assets/img/HomePage/cover3.jpg" alt="" class="item product-images">
							<img src="assets/img/HomePage/pic4.jpg" alt="" class="item product-images">
						</div>
					
						<div class="col-12 mt-0 controls">
							<div class="controls-theme">
								<div class="controls-dots">
									<div class="controls-dot active">
										<img src="assets/img/HomePage/cover2.jpg" alt="">
									</div>
									<div class="controls-dot">
										<img src="assets/img/HomePage/cover3.jpg" alt="">
									</div>
									<div class="controls-dot">
										<img src="assets/img/HomePage/pic4.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
		
				</div> <!-- end Product Carousel section -->

				
					
				<!-- Product Info section -->
				<div class="col-xl-3 col-lg-5 col-12 text-dark">
					<div class="row justify-content-center">
						<div class="product-tittle col-12 text-center">
							<h4>SQUARE CHAIN BRACELET</h4>
						</div>
						<div class="product-price col-12 mt-4">
							<h5 class="text-center"> 35,90 &euro;</h5>
						</div>
						<div class="horizontal-line col-12 mt-4">
							<hr style="color: #B1A296;border: none; height: 1px; max-width: 100%; background-color: #B1A296;">
						</div>
						<div class="action-buttons wishlist-button col-12">
							<button type="button" class="w-100 waves-effect waves-light"> Add to wishlist <i class="far fa-heart"></i></button>
						</div>
						<div class="action-buttons buy-button col-12 mt-3">
							<button type="button" class="w-100 waves-effect waves-light"> Buy it Now <i class="fas fa-shopping-cart"></i></button>
						</div>
						<div class="col-12 mt-5 info-tab">
							<ul class="nav nav-tabs" id="infoTab" role="tablist">
								<li class="nav-item waves-effect waves-dark">
								  <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
								</li>
								<li class="nav-item waves-effect waves-dark">
								  <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
								</li>
								<li class="nav-item waves-effect waves-dark">
								  <a class="nav-link" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Shipping</a>
								</li>
							</ul>
							<div class="tab-content ml-3" id="infoTab">
								<div class="tab-pane fade show active mt-4" id="description" role="tabpanel" aria-labelledby="home-tab">
									<p>The Square Chain Bracelet is refined in its minimalistic design. 
										A bracelet that suits any outfit and will last for years. Features a minimalistic Vacier logo tag. </p>
									<h6><i class="fas fa-calculator"></i> Adjustable sizing</h6>
									<p>The Bracelet features an extension chain to suit your wrist size. No matter if you want the bracelet to be loose or tight, 
										the extension chain allows you to find your preferred size. See more size information on the details page.</p>
									<h6><i class="fas fa-tint"></i> Waterproof and durable</h6>
									<p>All of Vacier's jewelry is minimal, yet durable. They are waterproof, 
										so you can use them in the shower, sea and pool. 
										The jewelry can be worn while training and sustains exposure to heat and sweat.</p>
								</div>
								<div class="tab-pane fade mt-4" id="details" role="tabpanel" aria-labelledby="profile-tab">
									<h6><i class="fas fa-calculator"></i> Size Details</h6>
									<p>A bracelet crafted to fit almost any wrist. It's made to fit the average wrist between 16 CM to 19 CM. 
										The length of the regular size is roughly 17.5 CM 
										with a 2 CM long extension chain. If you are not sure of your size, this size fits more than 95% of our customers. 
										The width of the chain is 1.5 MM.</p>
									<h6><i class="far fa-question-circle"></i> How to get the right size</h6>
									<p>1. We suggest you use to put a piece of string around your wrist.</p>
									<p>2. The length of the string will depend on your wrist size and how tight you want the bracelet to be. </p>		
									<p>3. Measure the string with your ideal length. Pick the bracelet that is closest to your preferred length</p>
								</div>
								<div class="tab-pane fade mt-4" id="shipping" role="tabpanel" aria-labelledby="contact-tab">
									<h6 class="text-center"><i class="fas fa-info-circle"></i> Delivery Information</h6>
									<p>We ship to Europe, Asia, Africa from our Warehouse in Sweden. 
										We ship to South and North America from our Warehouse in Texas in the US.
										97% of our packages arrive on time. However, 
										due to the pandemic delays may occur in some countries with regular post (Tracked Letter).</p>
									<h6>14 day return policy, read more on our return policy page.</h6>
									<p>To process a return or replacement please contact us on support@vacier.com. 
										We allow up to 14 days from day of order dispatch to request a return. 
										As soon as a return is received at our warehouse we will automatically 
										process the refund or replacement.</p>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end Product Info section -->
			</div>
	</section>

	<!-- alert -->
	<div class="wishlist-alert row justify-content-end fixed-top mr-3 d-none">
		<div class="alert alert-warning alert-dismissible fade show text-center col-lg-4 align-self-center" role="alert" style="top: 26px; height: 70px;">
			<h6 class="mt-3"><i class="far fa-check-circle"></i> Product added to wishlist. 
				<button type="button" class="close alert-close waves-effect waves-light mt-3">&#10006;</button>
			</h6>
		</div>
	</div> <!-- end alert -->
	 

	<!-- Modal Photo -->
	<div class="modal-photo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<button type="button" class="close-btn waves-effect waves-light ">&#10006;</button>
					<img src="assets/img/HomePage/cover2.jpg" alt="" >
				</div>
			</div>
		</div>
	</div> <!-- end Modal Photo -->
	

	<!-- Similar Product Section -->
	<div class="container mb-150 mt-150">
		<div class="row">
			<div class="col-12 text-center">
				<h3>You may also <span class="orange-text">like</span></h3>
			</div>
		</div>
	</div>
	<!-- end Similar Product Section -->

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

	<!-- single product js -->
	<script src="assets/js/singleproduct.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>
	
	<!-- waves js -->
	<script src="assets/js/waves.js"></script>

</body>

</html>