<?php
require_once './config.php';
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
  header("location:".SITE_URL . "home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Insurance | Insurances type</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="top-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="images/logo.jpg" alt="Company Name" class="logo">
							<div class="logo-text">
								<h1 class="site-title"><span style="color:red">HDFC </span>Life</h1>
								<small class="description"><span style="color:red">Sar uthake jiyo!</span></span></small>
							</div>
						</a> <!-- #branding -->
					
						<div class="right-section pull-right">
							<a href="#" class="phone"><img src="images/icon-phone.png" class="icon">+022 2442 7890</a>
					
							<form action="#" class="search-form">
								<input type="text" placeholder="Search...">
								<button type="submit"><img src="images/icon-search.png" alt=""></button>
							</form>
						</div>
					</div> <!-- .container -->
				</div> <!-- .top-header -->

				
				<div class="bottom-header">
					<div class="container">
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="index.html">Home</a></li>
								<li class="menu-item current-menu-item"><a href="insurance.html">Insurance plans</a></li>
								<li class="menu-item"><a href="#">Resources</a></li>
								<li class="menu-item"><a href="#">Contact</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->
						
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
						
						<div class="mobile-navigation"></div>
					</div>
				</div>
				
			</header> <!-- .site-header -->
    <div class="alert alert-dismissable alert-danger">
      <button data-dismiss="alert" class="close" type="button">x</button>
      <p><?php echo $_SESSION["e_msg"]; ?></p>
    </div>
  <?php } ?>
  <div class="col-sm-3 col-sm-offset-4 padding20">
    <a class="btn btn-block btn-social btn-linkedin" href="linkedin_login.php">
            <i class="fa fa-linkedin"></i> Login with LinkedIn
          </a>
  </div>
</div>
<?php

				<div class="page">
					<div class="container">
						<h3 class="entry-title">Choose your own insurance plan</h3>
						<p>Nam posuere purus vitae est sollicitudin placerat. Praesent posuere porta dignissim. Phasellus viverra, urna a convallis tincidunt, ante mi tempor turpis, nec tempor mauris ligula ut sapien. Etiam euismod mi eu ante mollis commodo. Suspendisse porta nisi vitae dui hendrerit, eget ornare orci semper. Phasellus pharetra, erat sit amet rutrum porttitor, est eros consectetur elit, molestie consequat erat tellus in dui. Vestibulum a vehicula sem. Nullam commodo quis purus in volutpat. Integer semper lacus a lorem efficitur auctor curabitur tincidunt ligula non.</p>

						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
								<option value=".skyscraper">skyscraper</option>
								<option value=".shopping-center">shopping-center</option>
								<option value=".apartment">apartment</option>
							</select>
							

						<div class="colophon">Copyright 2018 HDFC Life. All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>
<?php
//include './footer.php';
// unset if after it display the error.
$_SESSION["e_msg"] = "";
?>
</html>