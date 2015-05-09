<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/small_logo.png" />
	<title>onrustiroutes.com</title>
</head>
<body>
		<?php require 'partials/navbar.php' ?>
		<h3 style="padding-top:20px; text-align:center;">PLAN YOUR TRIP</h3>
			<div>
				<form action="" method="post">
								<table align="center">
									<tr>
										<td>
											<label for="">Name (Individual/Company) *</label>
										</td>
										<td>
											<input type="text" name="name">
										</td>
									</tr>
									<br>
									<tr>
										<td>
											<label for="fname">Email ID *</label>
										</td>
										<td>
											<input type="text" id="email" name="email">
										</td>
									</tr>

									<tr>
										<td>
											<label for="">Phone no.</label>
										</td>
										<td>
											<input type="text" id="phone" name="phone">
										</td>
									</tr>

									<tr>
										<td><label for="">Group Size *</label></td>
										<td><select name="group_size" id="group_size">
											<option value="solo">Solo/Couple</option>
											<option value="five">Upto Five</option>
											<option value="ten">Five to Ten</option>
											<option value="plus">More than ten</option>
										</select></td>
									</tr>
									<tr>
										<td><label for="">Duration of travel *</label></td>
										<td><select name="group_size" id="group_size">
											<option value="weekend">Weekend</option>
											<option value="zero-four">0-4 Days</option>
											<option value="four-seven">4-7 Days</option>
											<option value="seven-plus">7+ Days</option>
										</select></td>
									</tr>
								
									<tr>
										<td><label for="">Average age group *</label></td>
										<td><select name="group_size" id="group_size">
											<option value="eighteen">18-22 years</option>
											<option value="twenty-two">22-28 years</option>
											<option value="twenty-eight">28-35 years</option>
											<option value="above">35 Above</option>
										</select></td>
									</tr>
									<tr>
										<td><label for="">City of origin of travel *</label></td>
										<td><input type="text" id="origin" name="origin"></td>
									</tr>
									<tr>
										<td><label for="">Budget for trip *</label></td>
										<td><input type="text" name="budget" id="budget"></td>
									</tr>

									<tr>
										<td><label for="">What interests you? *</label></td>
										<td>
										<input type="checkbox" id="adventure" name="adventure">Adventure</input><br>
										<input type="checkbox" id="trekking" name="trekking">Trekking</input><br>
										<input type="checkbox" id="road trip" name="road trip">Road Trip</input><br>
										<input type="checkbox" id="relaxation" name="relaxation">Relaxation</input><br>
										<input type="checkbox" id="other" name="other">Other</input>
										<input type="text" id="other-text" name="other-text">
										</td>
									</tr>

									<tr>
										<td><label for="">Destination preferences *</label></td>
										<td>
										<input type="checkbox" id="hill-station" name="hill-station">Hill Station</input><br>
										<input type="checkbox" id="beach-ocean" name="beach-ocean">Beach/Ocean</input><br>
										<input type="checkbox" id="mountain" name="mountain">Mountain</input><br>
										<input type="checkbox" id="heritage" name="heritage">Heritage</input><br>
										<input type="checkbox" id="wildlife" name="wildlife">Wildlife</input><br>
										<input type="checkbox" id="other-2" name="other-2">Other</input>
										<input type="text" id="other2-text" name="other2-text">
										</td>
									</tr>									

									<tr>
										<td><label for="">Accomodation preferences *</label></td>
										<td>
										<input type="checkbox" id="hotel" name="hotel">Hotel</input><br>
										<input type="checkbox" id="budget" name="budget">Budget Hotel</input><br>
										<input type="checkbox" id="resort" name="resort">Resort</input><br>
										<input type="checkbox" id="camping" name="camping">Camping</input><br>
										<input type="checkbox" id="nomadic" name="nomadic">Nomadic</input><br>
										</td>
									</tr>
									
									<tr>
										<td></td><td><label for=""><bold>By choosing the trip, you are accepting the terms and conditions</bold></label></td>
									</tr>

									<td>
	<!--  -->									<td><input type="submit" name="submit" value="Submit"></td>
									</td>

								</table>
			</form>
			</div>
	<?php require 'partials/footer.php' ?>
</body>
</html>