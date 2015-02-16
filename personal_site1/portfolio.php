<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jay Buch | Portfolio</title>
	<meta charset='utf-8' />
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="css/portfolio_responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="container-fluid">
<body>
	<img src="images/brooklynbridge.jpg" id="brooklynbridge"/>
	<header class="header">		
		<a href="index.php"><img src="images/jb.jpg" id="my_image"></a>
		<a href="index.php" id="name"><h1>Jay Buch</h1></a>
		<a href="index.php" id="title"><h3>Developer</h3></a>
		<span class="glyphicon glyphicon-th" aria-hidden="true" id="menu"></span>		
			<nav id="nav" class="row">
					<a href="index.php" class="col-xs-12 col-md-4" id="resume">Profile</a>
					<a href="portfolio.php" id="portfolio" class="col-xs-12 col-md-4 selected">Portfolio</a>
					<a href="contact.php" class="col-xs-12 col-md-4" id="contact">Contact</a>
			</nav>		
		<a href="#"><button type="button" id="top_button"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br />Top</button></a>		
	</header>
	<section class="portfolio">	
			<div class="col-xs-12 col-md-6">
				<div class="twitter_clone">
					<div class="twitter_caption">
						<h4 style="color: black">Twitter Clone</h4>
						<a href="twitterclone/index.php" target="_new" class="btn btn-primary" role="button">Site</a> <a href="https://github.com/jatanbuch" target="_new" class="btn btn-default" role="button">Code</a>
					</div>
					<img src="images/twitterclone_screenshot.jpg" id="twitter_project" />
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="personal_site">
					<div class="personalsite_caption">
						<h4 style="color: black">Personal Website</h4>
						<a href="index.php" target="_new" class="btn btn-primary" role="button">Site</a> <a href="https://github.com/jatanbuch" target="_new" class="btn btn-default" role="button">Code</a>
					</div>
					<img src="images/personal_site.jpg" id="personalsite_project" />
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="apple_clone">
					<div class="appleclone_caption">
						<h4 style="color: black">Apple Clone</h4>
						<a href="Apple_clone/apple.php" target="_new" class="btn btn-primary" role="button">Site</a> <a href="https://github.com/jatanbuch" target="_new" class="btn btn-default" role="button">Code</a>
					</div>
					<img src="images/apple_clone.jpg" id="appleclone_project" />
				</div>
			</div>
			</div>
	</section>
	<?php require("footer.php");?>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/portfolio.js"></script>
</body>
</html>