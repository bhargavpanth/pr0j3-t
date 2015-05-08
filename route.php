<?php
	if(isset($_POST['submit'])){
		require_once("config.php");
		mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
		mysql_select_db($DB_NAME);
		$trekDate	=	mysql_real_escape_string($_POST['date']);
		$firstName	=	mysql_real_escape_string($_POST['fname']);
		$lastName	=	mysql_real_escape_string($_POST['lname']);
		$email 		=	mysql_real_escape_string($_POST['email']);
		$dob		=	mysql_real_escape_string($_POST['dob']);
		$gender		=	mysql_real_escape_string($_POST['gender']);
		$address	=	mysql_real_escape_string($_POST['mail']);
		$city		=	mysql_real_escape_string($_POST['city']);
		$state		=	mysql_real_escape_string($_POST['state']);
		$country	=	mysql_real_escape_string($_POST['country']);
		$phoneNum	=	mysql_real_escape_string($_POST['mobile']);
		$referal	=	mysql_real_escape_string($_POST['refereal']);
		$sql		=	"INSERT INTO PlanYourWeekEnd (`fname`, `lname`, `email`, `dob`, `sex`, `address`, `city`, `state`, `country`, `mobile`, `referer`, `dateOfTrip`, `destination`) VALUES('$firstName', '$lastName', '$email', '$dob','$gender','$address','$city','$state','$country','$phoneNum','$referal','$trekDate','mallali');";
		if(mysql_query($sql)){
			header("location:thankYou.php?success");
		}else{
			header("location:thankYou.php?fail");
		}
	}else{
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<?php require 'partials/navbar.php' ?>
	<head>
		<title>Mallali Trek</title>
		<link rel="stylesheet" type="text/css" href="css/content_default.css" />
		<link rel="stylesheet" type="text/css" href="css/content_component.css" />
		<script src="js/content_modernizr.custom.js"></script>
		<style>
			.cbp-content li{
				position:relative !important;
			}
		</style>
	</head>
	<body>
		<div class="container">
		<br><br><br><br>
			<div class="main"><br>
			<center>
			<?php
				require_once("config.php");
				mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
				mysql_select_db($DB_NAME);
				$id		=	mysql_real_escape_string($_GET['id']);
				$sql	=	"SELECT destinations.cover,routes.title,routes.type,routes.image,info.title,info.vital,info.brief,info.details,info.guidelines FROM routes,destinations,info WHERE routes.belongsTo=destinations.id AND routes.id=$id AND info.belongsTo=routes.id;";
				$query	=	mysql_query($sql);
				$data	=	mysql_fetch_object($query);

			?>
			<img id="image" src="<?php echo $data->cover;?>" style='width:100%;' height="450" border="0" alt="cover">
			</center>
			<hr>
				<div id="cbp-contentslider" class="cbp-contentslider">
					<ul>

						<li id="slide1">
							<h3>Highlights</h3>
							<div>
								<div class="cbp-content">
									<p><a href="">Day 1</a> <br> Arrival at Coorg Check in at resort <br> Jeep journey to falls <br> Trek and camp for night.</p>
									<p><a href="">Day 2</a> <br> Return to resort and indulge in various activities aimed at all age groups</p>
								</div>
							</div>
						</li>

						<li id="slide2">
							<h3>Details</h3>
							<div>
								<div class="cbp-content">
									<p>
									<?php
									$value=$data->details;
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									echo nl2br(str_replace("\n\n", "\n", $value));
									?>
									</p>
								</div>
							</div>
						</li>

						<li id="slide3">
							<h3>Gudelines</h3>
							<div>
								<div class="cbp-content">
									<p><?php
									$value=$data->guidelines;
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									$value=str_replace("\n\n", "\n", $value);
									echo nl2br(str_replace("\n\n", "\n", $data->guidelines));
									?></p>
								</div>
							</div>
						</li>

						<li id="slide4">
							<h3>Register for the trip</h3>
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
								<table>
									<tr>
										<td>
											<label for="">Trek Batch</label>
										</td>
										<td>
											<input type="date" name="date">
										</td>
									</tr>

									<tr>
										<td>
											<label for="fname">First Name</label>
										</td>
										<td>
											<input type="text" id="fname" name="fname">
										</td>
									</tr>
									
									<tr>
										<td>
											<label for="lname">Last Name</label>
										</td>
										<td>
											<input type="text" id="lname" name="lname">
										</td>
									</tr>

									<tr>
										<td>
											<label for="">Email</label>
										</td>
										<td>
											<input type="text" id="email" name="email">
										</td>
									</tr>

									<tr>
										<td><label for="">Date of Birth</label></td>
										<td><input type="date" id="dob" name="dob"></td>
									</tr>
									
									<tr>
										<td><label for="">Gender</label></td>
										<td>
										<select name="gender" id="gender">
										<option value="male">Male</option>
										<option value="female">Female</option>
										</select>
										</td>
									</tr>

									<tr>
										<td><label for="">Mailing Address</label></td>
										<td><textarea name="mail" id="mail" cols="30" rows="10"></textarea></td>
									</tr>

									<tr>
										<td><label for="">City</label></td>
										<td><input type="text" name="city" id="city"></td>
									</tr>

									<tr>
										<td><label for="">State</label></td>
										<td><input type="text" name="state" id="state"></td>
									</tr>

									<tr>
										<td><label for="">Country</label></td>
										<td><input type="text" id="country" name="country"></td>
									</tr>

									<tr>
										<td><label for="">Mobile</label></td>
										<td><input name="mobile" type="text"></td>
									</tr>

									<tr>
										<td><label for="">Referal</label></td>
										<td><select name="refereal" id="referal">
											<option value="newspaper">Newspaper</option>
											<option value="friends">Friends</option>
										</select></td>
									</tr>
									
									<tr>
										<td></td><td><label for="">By choosing the trip, you are accepting the terms and conditions</label></td>
									</tr>

									<td>
										<td><input type="submit" name="submit" value="Submit"></td>
									</td>
								</table>
								<br>
								<br>
								<br>
								<br>
							</form>
						</li>

					</ul>

						<nav>
							<a href="#slide1" class=""><span>Highlights</span></a>
							<a href="#slide2" class=""><span>Details</span></a>
							<a href="#slide3" class=""><span>Guidelines</span></a>
							<a href="#slide4" class=""><span>Register</span></a>
						</nav>

				</div>
				<?php require 'partials/footer.php' ?>
			</div>
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/content_jquery.cbpContentSlider.min.js"></script>
		<script>
			$(function() {


				$( '#cbp-contentslider' ).cbpContentSlider();
			});
		</script>
	</body>


</html>
<?php } ?>