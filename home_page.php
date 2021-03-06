<?php
	session_start();
	ob_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<!-- AddtoCart-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Work+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<!-- AddtoCart-->

	<title>Home Page</title>

	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

<!--
	Alert box saying login successful
-->
<script type="text/javascript">
	alert("Login Successful!!");
</script>


	<div class="top-nav-bar">
		<div class="search-box">
			<img src="image/Leevou_website_logo.jpg" class="logo" width="270px">
			<input type="text" class="form-control">
			<span class="input-group-text"><i class="fa fa-search"></i></span>
		</div>
		<div class="menu-bar">
			<ul>
				<li>
					<a href="home_page.php">Home</a>
				</li>
				<li>
					<!--
						This area is to display user details
					-->
					<?php

					echo $_SESSION["user"];

					?>
				</li>
				<li>
					<a href="logout.php">LogOut</a>
				</li>
				<li>
					<a href="#">Cart</a>
				</li>
			</ul>
		</div>
	</div>


<section class="header">
	<div class="side-menu" id="side-menu">
		<ul>
			<li>
				On sale
				<i class="fa fa-angle-right"></i>
				<ul>
					<li>
						Redmi Phones
					</li>
					<li>
						Vivo Phones
					</li>
					<li>
						Oppo Phones
					</li>
				</ul>
			</li>
			<li>
				Mobiles
				<i class="fa fa-angle-right"></i>
				<ul>
					<li>
						Sub Menu-2
					</li>
					<li>
						Sub Menu-2
					</li>
					<li>
						Sub Menu-2
					</li>
				</ul>
			</li>
			<li>
				Computers
				<i class="fa fa-angle-right"></i>
				<ul>
					<li>
						Sub Menu-3
					</li>
					<li>
						Sub Menu-3
					</li>
					<li>
						Sub Menu-3
					</li>
				</ul>
			</li>
			<li>
				About Us
				<i class="fa fa-angle-right"></i>
				<ul>
					<li>
						Sub Menu-3
					</li>
					<li>
						Sub Menu-3
					</li>
					<li>
						Sub Menu-3
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>
<!--Welcome message
<br><br><br><br><br><br><br><br>
-->
<div class="welc">
	Welcome To Leevou
</div>




<!-- AddtoCart-->

<a href="#0" class="cd-cart">
		<span>0</span>
</a>

<ul class="cd-gallery">
		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e1.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">
					
					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->

			<div class="cd-item-info">
				<b><a href="#0">Gaming desktop</a></b>
				<em>$399.99</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e2.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">

					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->
			
			<div class="cd-item-info">
				<b><a href="#0">Canon camera</a></b>
				<em>$69.99</em>
			</div> <!-- cd-item-info -->
		</li>
		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e3.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">
					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->

			<div class="cd-item-info">
				<b><a href="#0">Sony HD Headphone</a></b>
				<em>$29.99</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e4.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">
					

					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->
			
			<div class="cd-item-info">
				<b><a href="#0">Gaming PC fully assembled</a></b>
				<em>$499.99</em>
			</div> <!-- cd-item-info -->
		</li>
		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e5.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">
					

					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->

			<div class="cd-item-info">
				<b><a href="#0">Office desktop</a></b>
				<em>$399.99</em>
			</div> <!-- cd-item-info -->
		</li>

		<li>
			<div class="cd-single-item">
				<a href="#0">
					<img src="img/e6.jpg" alt="Preview image">
				</a>

				<div class="cd-customization">
					

					<button class="add-to-cart">
						<em><small>Add to Cart</small></em>
						<svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
							<path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/>
						</svg>
					</button>
				</div> <!-- .cd-customization -->
			</div> <!-- .cd-single-item -->
			
			<div class="cd-item-info">
				<b><a href="#0">Nikon camera</a></b>
				<em>$399.99</em>
			</div> <!-- cd-item-info -->
		</li>
	

	</ul>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->




</body>
</html>