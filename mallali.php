<!DOCTYPE html>
<html lang="en" class="no-js">
<?php require 'partials/navbar.php' ?>
	<head>
		<title>Mallali Trek</title>
		<link rel="stylesheet" type="text/css" href="css/content_default.css" />
		<link rel="stylesheet" type="text/css" href="css/content_component.css" />
		<script src="js/content_modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
		<br><br><br><br>
			<div class="main"><br>
			<center>
			<img id="image" src="img/cover.jpg" style='width:100%;' border="0" alt="cover">
			</center>
			<hr>
				<div id="cbp-contentslider" class="cbp-contentslider">
					<ul>
						<li id="slide1">
							<h3>Mallali - Vital Information</h3>
							<div>
								<div class="cbp-content">
									<p>
										<!-- <ul> -->
											<a href="">Region</a>- Coorg/Kodagu <br>
											<a href="">Duration</a>- 2-3 days(weekend trips) <br>
											<a href="">Difficulty</a>- Easy <br>
											<a href="">Terrain</a>- Mountain and valley <br>
											<a href="">Cost</a>- 6000/-
										<!-- </ul> -->
									</p>
									 <p><br><br><br><br><br></p> 
								</div>
							</div>
						</li>
						<li id="slide2">
							<h3>Mallali - Trail</h3>
							<div>
								<div class="cbp-content">
									<p>The journey starts from Mallali,Somerpet, an undiscovered 
									natural waterfall which resides within the Pushpagiri forest
									in the Western Ghats.The scenic trek is visually aided by the
									strong natural flow of the Girihole river. The trekkers will 
									pitch camp near the waterfall with occasional water showers 
									cooling off the trek experience. The succeeding day is a day
									 of adrenaline rushes with activities such as mountain biking,
									 white water rafting, kayaking and coffee estate tours.</p>
									<!-- <p></p> -->
								</div>
							</div>
						</li>
						<li id="slide3">
							<h3>Mallali - Brief Itinerary</h3>
							<div>
								<div class="cbp-content">
									<p><a href="">Day 1</a> <br> Arrival at Coorg Check in at resort <br> Jeep journey to falls <br> Trek and camp for night.</p>
									<p><a href="">Day 2</a> <br> Return to resort and indulge in various activities aimed at all age groups</p>
								</div>
							</div>
						</li>
						<li id="slide4">
							<h3>Mallali Long Itinerary</h3>
							<div>
								<div class="cbp-content">
									<p><a href="">Day 1 </a><br>
Amidst the early morning mist, a traditional Kodava breakfast welcomes the travelers. Enjoy 
a special tour of the local self sustained coffee estates. Leave for the Mallalli falls trail by jeep 
and take in the surreal imagery. A haven for photographers and travel writers or just nature 
enthusiasts, the Mallalli Falls, is a spectacle to behold. The trek takes you through the valley 
and makes its way near the steep falls. After spending the evening basking in the glorious view, 
the campsite needs to be setup which has a magnificent view of the waterfall, where campers 
will stay the night. An authentic traditional culinary experience is provided to encapsulate the 
soul of the Kodavas in the light of the campfire.</p>

<p>
	<a href="">Day 2</a> <br>
The morning sun, the lush greenery and the flamboyant waterfall are all attributes which make 
up a perfect morning or as we call it Day 2. The journey is now reversed as the hikers make 
their way to the resort where they will enjoy a royal brunch and spend the rest of the day in 
leisure activities aimed at restoring the harmonic balance between the spirit and the body to 
provide a sense of rejuvenation.
</p>
									</div>
							</div>
						</li>
						<li id="slide5">
							<h3>Mallali - Unique to us</h3>
							<div>
								<div class="cbp-content">
									<p>We at rustic routes ensure the routes are less weary and the trials have a fresh natural 
experience far away from the ordeals of the traditional treks where the hustle and a bustle of a 
city is immaterial in front of the gorgeous eye candy, that is the Mallalli falls.</p>
		</div>
							</div>
						</li>
					</ul>
					<nav>
						<a href="#slide1" class=""><span>Vital Info</span></a>
						<a href="#slide2" class=""><span>Trail</span></a>
						<a href="#slide3" class=""><span>Brief Itinerary</span></a>
						<a href="#slide4" class=""><span>Long Itinerary</span></a>
						<a href="#slide5" class=""><span>Unique</span></a>
					</nav>
				</div>
			</div>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/content_jquery.cbpContentSlider.min.js"></script>
		<script>
			$(function() {
				/*
				- how to call the plugin:
				$( selector ).cbpContentSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease-in-out',
					// current item's index
					current : 0
				}
				- destroy:
				$( selector ).cbpContentSlider( 'destroy' );
				*/

				$( '#cbp-contentslider' ).cbpContentSlider();
			});
		</script>
	</body>

<!-- 	<?php require 'partials/footer.php' ?>-->
</html>
