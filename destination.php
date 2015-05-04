<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/grid_component.css" />
</head>
<body>
	<?php require 'partials/navbar.php' ?> <br><br><br><br><br>
	<img src="img/cover.jpg" style="width:100%" alt="cover">
	<hr>
	
		<center>
		<?php
			$route=$_GET['id'];
			require_once("classes/getNameFromCodeName.php");
			require_once("config.php");
			$name=new getNameFromCodeName($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
			$fullName=$name->getName($_GET['id']);
		?>
	<h2><?php echo $fullName; ?></h2>
		</center>
	
	<!-- Images Grid -->
	<?php require_once('partials/image_grid.php'); ?>

<!--  -->
</body>
</html>