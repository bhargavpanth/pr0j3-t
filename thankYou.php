<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/small_logo.png" />
	<title>onrusticroutes.com</title>
</head>
<body>
<?php require 'partials/navbar.php' ?>

<?php
if(isset($_GET['success'])){
		?>
			<div class="sucess">
				<div style="text-align:center;">
				<h2>Awesome, we're good to go !</h2>
				<h4>Thank you for your registrations. We can't wait to see you on board</h4>
				<h4>We'll get back to you shortly</h4>
				</div>
			</div>

		<?php
	}
if(isset($_GET['fail'])){
	?>
		<div class="fail">
		<div style="text-align:center;">
			<h2>Oops, there seems to be some issue with the registration</h2>
			<h4>We're sorry, there seems to be some error. Please try again in a few minutes</h4>
		</div>
		</div>

	<?php
}
?>





<?php require 'partials/footer.php' ?>	
</body>
</html>