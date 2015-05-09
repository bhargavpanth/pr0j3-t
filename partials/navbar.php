<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
		<title>rousticroutes.com</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
	</head>
	<header>
		<div class="container">
			<div class="main">
				<nav id="hrmenu" class="hrmenu">
					<ul>	
						<li id="image">
							<a href="index.php" onclick="window.location='/index.php'"><img src="img/small_logo.png" alt=""></a>
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
									<h4>COMING SOON !!</h4>
										<!-- <h4>Rustic India</h4>
										<ul>
											<li><a href="#">Kerala</a></li>
											<li><a href="#">Coorg</a></li>
											<li><a href="#">Goa</a></li>
										</ul> -->
									</div>
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						<li>
							<a href="#">Plan Your Trip</a>
						</li>
						<li>
							<a href="#">Resources</a>
							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Blogs</h4>
										<ul>
											<li><a target="_blank" href="//blog.onrusticroutes.com">Travel Blog</a></li>
											<li><a target="_blank" href="//blog.onrusticroutes.com">Food Blog</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#">Contact Us</a>
							<div class="hrsub">
								<div class="hrsub-inner"> 
									<div id="cm">
										<h4>Get in touch with us</h4>
										<ul>
											<li style="color:#efebe5">Email us at: <a href="mailto:hello@rusticroutes.com"><br>hello@rusticroutes.com</a></li>
											<li style="color:#efebe5">Call us at: <a href="#"><br>+91-9483128206/7022617122</a></li>
											<div style="display:inline;">
												<a href="https://www.facebook.com/onrusticroutes" style="padding-left: 20px;"><img src="../img/facebook.png" alt="facebook"></a>
												<a href="https://wwww.twitter.com/onrusticroutes" style="padding-left: 20px;"><img src="../img/twitter.png" alt="twitter"></a>
												<a href="https://www.instagram.com/on_rustic_routes" style="padding-left: 20px;"><img src="../img/instagram.png" alt="instagram"></a>
											</div>
										</ul>
								</div>
							</div>
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