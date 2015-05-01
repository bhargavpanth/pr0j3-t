<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OnRusticRoutes</title>
</head>
<body>
<?php require 'partials/navbar.php' ?>

<br>
<br>
<br>
<br>

<?php
if(isset($_GET['success'])){
		?>
			<div class="sucess">
				<h2>Awesome, we're good to go !</h2>
				<h4>Thank you for your registrations. We can't wait to see you on board</h4>
			</div>

		<?php
	}
if(isset($_GET['fail'])){
	?>
		<div class="fail">
			<h2>Oops, there seems to be some issue with the registration</h2>
			<h4>We're sorry, there seems to be some error. Please try again in a few minutes</h4>
		</div>

	<?php
}
?>





<?php require 'partials/footer.php' ?>	
</body>
</html>