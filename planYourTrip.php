<?php
	if(isset($_POST['submit'])){
		echo "<pre>";
		$name				=		$_POST['name'];
		$email				=		$_POST['email'];
		$phone 				=		$_POST['phone'];
		$groupSize 			=		$_POST['group_size'];
		$duration 			=		$_POST['duration'];
		$ageGroup			=		$_POST['age_group'];
		$origin				=		$_POST['origin'];
		$budget				=		$_POST['budget'];
		$interests			=		$_POST['interest'];
		$interests			=		implode("|", $interests);
		$interest_other		=		$_POST['interest_other'];
		$interests			=		$interests."%".$interest_other;
		$destinationPref	=		$_POST['destination_preferences'];
		$destination_other	=		$_POST['destination_other'];		
		$destinationPref	=		implode("|", $destinationPref);
		$destinationPref 	=		$destinationPref."%".$destination_other;
		$acomodationPref	=		$_POST['acomodation_pref'];
		$acomodationPref	=		implode("|", $acomodationPref);
		//get the data properly

		require_once("config.php");
		// connect to a database
		$con				=		mysql_connect($DB_HOST,$DB_USER,$DB_PASS);

		//select our database
		mysql_select_db($DB_NAME);

		//write a query
		$sql				=		"INSERT INTO `rustic`.`planYourTrip` (`name`, `email`, `phone`, `groupSize`, `duration`, `ageGroup`, `origin`, `budget`, `interests`, `destinationPref`, `acomodationPref`) VALUES ('$name', '$email', '$phone', '$groupSize', '$duration', '$ageGroup', '$origin', '$budget', '$interests', '$destinationPref', '$acomodationPref');";
		// execute that query
		$query				=		mysql_query($sql);

		if($query){
			header("location:thankYou.php?success");
		}else{
			header("location:thankYou.php?fail");
		}

	}else{
?>
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
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
										<td><select name="duration">
											<option value="weekend">Weekend</option>
											<option value="zero-four">0-4 Days</option>
											<option value="four-seven">4-7 Days</option>
											<option value="seven-plus">7+ Days</option>
										</select></td>
									</tr>
								
									<tr>
										<td><label for="">Average age group *</label></td>
										<td><select name="age_group">
											<option value="eighteen">18-22 years</option>
											<option value="twenty-two">22-28 years</option>
											<option value="twenty-eight">28-35 years</option>
											<option value="above">35 Above</option>
										</select></td>
									</tr>
									<tr>
										<td><label for="">City of origin *</label></td>
										<td><input type="text" id="origin" name="origin"></td>
									</tr>
									<tr>
										<td><label for="">Budget for trip *</label></td>
										<td><input type="text" name="budget" id="budget"></td>
									</tr>

									<tr>
										<td><label for="">What interests you? *</label></td>
										<td>
										<input type="checkbox" id="adventure" value="adventure" name="interest[]" />Adventure<br>
										<input type="checkbox" id="trekking" value="trekking" name="interest[]" />Trekking<br>
										<input type="checkbox" id="road trip" value="road trip" name="interest[]" />Road Trip<br>
										<input type="checkbox" id="relaxation" value="relaxation" name="interest[]" />Relaxation<br>
										Other
										<input type="text" id="other-text" value="" name="interest_other" />
										</td>
									</tr>

									<tr>
										<td><label for="">Destination preferences *</label></td>
										<td>
										<input type="checkbox" value="Hill Station" id="hill-station" name="destination_preferences[]" />Hill Station/Mountain Ranges<br>
										<input type="checkbox" value="Beach/Ocean" id="beach-ocean" name="destination_preferences[]" />Coastals<br>
										<!-- <input type="checkbox" value="Mountain" id="mountain" name="destination_preferences[]" />Mountain<br> -->
										<input type="checkbox" value="Heritage" id="heritage" name="destination_preferences[]" />Heritage<br>
										<input type="checkbox" value="Wildlife" id="wildlife" name="destination_preferences[]" />Jungle/Wildlife<br>
										Other
										<input type="text" name="destination_other" />
										</td>
									</tr>									

									<tr>
										<td><label for="">Accomodation preferences *</label></td>
										<td>
										<input type="checkbox" id="hotel" name="acomodation_pref[]" value="hotel" />Hotel<br>
										<input type="checkbox" id="budget" name="acomodation_pref[]" value="budget" />Budget Stay<br>
										<input type="checkbox" id="resort" name="acomodation_pref[]" value="resort" />Resort<br>
										<input type="checkbox" id="camping" name="acomodation_pref[]" value="camping" />Camping<br>
										<input type="checkbox" id="nomadic" name="acomodation_pref[]" value="nomadic" />Homestay<br>
										</td>
									</tr>
									
									<tr>
										<td></td><td><label for=""><b>By choosing the trip, you are accepting the terms and conditions</b></label></td>
									</tr>

									<td>
	<!--  -->									<td><input type="submit" name="submit" value="Submit" style="border:3px solid #ebefe5;padding: 20px 40px; display: inline-block; margin: 15px 30px; text-transform: uppercase; letter-spacing: 1px;"></td>
									</td>

								</table>
			</form>
			</div>
	<?php require 'partials/footer.php' ?>
</body>
</html>
<?php } ?>