<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>rousticroutes.com</title>
		<!-- <link rel="shortcut icon" href="../favicon.ico"> -->
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
	</head>
	<header>
		<div class="container">
			<div class="main">
				<nav id="hrmenu" class="hrmenu">
					<ul>	
						<li id="image">
							<a href="index.php"><img src="img/small_logo.png" alt=""></a>
						</li>
						<li>
							<a href="#">Destinations</a>
							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Destinations</h4>
										<ul>
											<?php
												require_once("config.php");
												$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
												mysql_select_db($DB_NAME);
												$sql="SELECT * FROM destinations;";
												$query=mysql_query($sql);
												while($data=mysql_fetch_object($query)){
													?>
											<li><a href="destination.php?id=<?php echo $data->codeName; ?>"><?php echo $data->title; ?></a></li>
													<?php
												}


											?>
											
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Rustic India</a>
							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Rustic India</h4>
										<ul>
											<li><a href="#">Kerala</a></li>
											<li><a href="#">Coorg</a></li>
											<li><a href="#">Goa</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Plan Your Weekend</a>
							<!-- <div class="hrsub">
								<div class="hrsub-inner">
									<div id="cm">
										<h4>Plan with us</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
										<h4>Professionals</h4>
										<ul>
											<li><a href="#">Success 1.0</a></li>
											<li><a href="#">Moneymaker</a></li>
										</ul>
									</div>
									<div>
										<h4>Entertainment</h4>
										<ul>
											<li><a href="#">Gadget Finder</a></li>
											<li><a href="#">Green Tree Express</a></li>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Holy Cannoli</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
									</div>
									<div>
										<h4>Games</h4>
										<ul>
											<li><a href="#">Catch the Bullet</a></li>
											<li><a href="#">Snoopydoo</a></li>
											<li><a href="#">Fallen Angel</a></li>
											<li><a href="#">Sui Maker</a></li>
											<li><a href="#">Wave Master</a></li>
											<li><a href="#">Golf Pro</a></li>
										</ul>
									</div>
								</div>
							</div> -->
						</li>
						<li>
							<a href="#">Resources</a>
							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Blogs</h4>
										<ul>
											<li><a href="#">Travel Blog</a></li>
											<li><a href="#">Food Blog</a></li>
										</ul>
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Contact Us</a>
<!-- 							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Get in touch with us</h4>
										<ul>
											<li>Email us at: <a href="#"><br>something@rusticroutes.com</a></li>
											<li>Call us at: <a href="#"><br>+9123456788</a></li>
										</ul>
								</div></cbp-hrsub-inner
							</div> /cbp-hrsub --> 						
						</li>
 
					</ul>
				</nav>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/cbpHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	</header>
</html>