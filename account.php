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

	<!-- account style -->
	<link rel="stylesheet" href="./assets/css/account.css">

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
					<h1>Log-in Or Register</h1>
				</div>
				</div>
			</div>
		</div>
	</div> <!-- end BreadCrum Section -->

	<!-- Account Form section -->
	<div class="container mt-5 mb-150">
		<div class="account-tittle text-center">
			<h4>Crea un account personale per entrare a far parte dell’universo <span class="orange-text">Pietra di Luna</span> </h4>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="col-12 mt-5 info-tab text-center">
					<ul class="nav nav-tabs row justify-content-center gutter-1 active" id="infoTab" role="tablist">
						<li class="nav-item col-lg-2 col-6 mr-lg-3 mr-0 waves-effect waves-dark active">
						  <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="description" aria-selected="false">Log-in</a>
						</li>
						<li class="nav-item col-lg-2 col-6 waves-effect waves-dark">
						  <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="details" aria-selected="true">Register</a>
						</li>
					</ul>
					<div class="tab-content ml-3" id="infoTab">
						<div class="tab-pane fade show active mt-5" id="login" role="tabpanel" aria-labelledby="login-tab">
							<form class="login-form" autocomplete="off" id="loginForm">
								<div class="row justify-content-center">	
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Enter your email</span></div>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-2 px-lg-5 px-0 mb-lg-2 mb-0">
										<input type="password" class="form-control" id="password">
										<div class="field-placeholder field-placeholder2"><span>Enter your password</span></div>
										<i class="fa fa-eye eye waves-effect"></i>
									</div>
									<div class="form-check col-lg-6 col-12 mx-3 px-lg-5 px-0 mt-3">
										<div class="row justify-content-between">
											<div class="col-6 text-left mt-1 mb-4">
												<label class="checkbox-wrap checkbox-primary h6">Remeber me
													<input id="remember" type="checkbox" name="remember">
													<span class="checkmark"></span>
												</label>
											</div>
											<div class="col-6 text-right mt-1 mb-4 forgot-password">
												<h6><a href="">Forgot password?</a></h6>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-12 mx-2 px-lg-5 px-0 mt-3">
										<button id="loginButton" type="button" class="submit-btn waves-effect waves-light w-100" style="height: 50px;">Log in</button>
									</div>
									<div class="col-lg-6 col-12 mx-2 px-lg-5 px-0 mt-3">
										<span id="loginResponse" class="text-danger h6"></span>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade mt-5" id="register" role="tabpanel" aria-labelledby="register-tab">
							<form class="login-form" autocomplete="off" id="registerForm">
								<div class="row justify-content-center">	
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="text" class="form-control" id="name" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Enter your name</span></div>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="text" class="form-control" id="surname" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Enter your surname</span></div>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="text" class="form-control" id="state" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Enter your state</span></div>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Enter your email</span></div>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="password" class="form-control" id="registerPassword" aria-describedby="emailHelp">
										<div class="field-placeholder field-placeholder3"><span>Enter your password</span></div>
										<span class="text-muted ml-1">Occorre inserire almeno 8 caratteri e 1 numero.</span>
									</div>
									<div class="form-group field-wrapper col-lg-6 col-12 text-left mx-lg-2 px-lg-5 px-0 mb-4">
										<input type="password" class="form-control" id="confirmPassword" aria-describedby="emailHelp">
										<div class="field-placeholder"><span>Confirm password</span></div>
									</div>
									<div class="form-check col-lg-6 col-12 mx-3 mt-4 px-lg-5 px-0">
										<div class="row justify-content-between">
											<div class="col-12 text-left mt-1 mb-4">
												<label class="checkbox-wrap checkbox-primary h6 text-muted">Acconsento affinchè Bulgari utilizzi le mie informazioni personali per migliorare il servizio adattandolo alle mie preferenze.
													<input id="condition1" type="checkbox" name="remember">
													<span class="checkmark"></span>
												</label>
											</div>
											<div class="col-12 text-left mt-1 mb-4">
												<label class="checkbox-wrap checkbox-primary h6 text-muted">Acconsento a ricevere comunicazioni di marketing da Bulgari riguardanti la cura del prodotto, i servizi, gli eventi e le nuove collezioni.
													<input id="condition2" type="checkbox" name="remember">
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-12 mx-2 px-lg-5 px-0 mt-3">
										<button id="registerButton" type="button" class="submit-btn waves-effect waves-light w-100" style="height: 50px;">Register</button>
									</div>
									<div class="col-lg-6 col-12 mx-2 px-lg-5 px-0 mt-3">
										<span id="registerResponse" class="text-danger h6"></span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Account Form section -->

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

	<!-- account js -->
	<script src="assets/js/account.js"></script>

	<!-- footer js -->
	<script src="assets/js/footer.js"></script>
	
	<!-- waves js -->
	<script src="assets/js/waves.js"></script>

</body>

</html>