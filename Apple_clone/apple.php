<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Apple, Inc.</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/apple.css">
	<link rel="stylesheet" type="text/css" href="css/responsiveapple.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8"/>
	</head>
	<body>
		<header>
			<a href="#"><img src="images/apple-logo.jpg" id="apple-logo-show"></a>
			<div id="drop-menu">
			<nav id="drop-menu">
				<ul class="drop_menu">
					<li><a href="#">Store</a></li>
					<li><a href="#">Mac</a></li>
					<li><a href="#">iPhone</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">iPad</a></li>
					<li><a href="#">iPod</a></li>
					<li><a href="#">iTunes</a></li>
					<li><a href="#">Support</a></li>
					<li><input type="text" placeholder="Search apple.com" id="searchbox"></li>
					<li><a href="#"><span onclick="showSearch();" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
				</ul>
			</nav>
			</div>
		<div class="row">
			<nav id="top-menu">
				<ul class="top_menu">
					<li><a href="#"><img src="images/apple-logo.jpg" id="apple-logo"></a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">Mac</a></li>
					<li><a href="#">iPhone</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">iPad</a></li>
					<li><a href="#">iPod</a></li>
					<li><a href="#">iTunes</a></li>
					<li><a href="#">Support</a></li>
					<li><input type="text" placeholder="Search apple.com" id="searchbox"></li>
					<li><a href="#"><span onclick="showSearch();" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
				</ul>
			</nav>
		</div>
		</header>
		<a href="#" onclick="showMenu();" id="menu-button" type="button" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
			</a>
		<section>
			<div class="main-text">
				<h1>Start something new.</h1>	
				<p>When you start with amazing products, you can create amazing things.</p>
				<p><a href="#">View the gallery></a></p>
			</div>
		</section>
		<section>
			<img src="images/main_image.png" id="main-image">
		</section>
		<div class="row">		
		<section class="bottom_images">		
			<a href=""><img src="images/ipadair2.jpg"></a>
			<a href=""><img src="images/iphone6.jpg"></a>
			<a href=""><img src="images/watch.jpg"></a>
			<a href=""><img src="images/imac.jpg"></a>		
		</section>
		</div>
		<footer>
		<div class="row">
			<p id="footer-para1">Shop the <a href="#">Apple Online Store</a> (1-800-MY-APPLE), visit an <a href="#">Apple Retail Store</a>, or find a <a href="#">reseller</a>.</p>
			<ul class="rightFooter">
				<li><a href="#">Apple Info |</a></li>
				<li><a href="#">Site Map |</a></li>
				<li><a href="#">Hot News |</a></li>
				<li><a href="#">RSS Feeds |</a></li>
				<li><a href="#">Jobs |</a></li>
				<li><a href="#">Contact Us |</a></li>
				<li><a href="#"><img src="images/flag.png"></a></li>
			</ul>
			<p id="footer-para2">Copyright &copy <?php echo date("Y") ?> Apple Inc. All rights reserved. <a href="#">Terms of use | Updated Privacy Policy</a></p>
		</div>
		</footer>
	</body>
<script type="text/javascript" src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/appleclone.js"></script>
</html>