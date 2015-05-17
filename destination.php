<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>onrusticroutes.com</title>
	<link rel="shortcut icon" href="img/small_logo.png" />
	<link rel="stylesheet" type="text/css" href="../css/grid_component.css" />
</head>
<body>
	<?php require 'partials/navbar.php' ?>
	<?php
		$route=$_GET['id'];
		require_once("config.php");
		$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
		mysql_select_db($DB_NAME);
		$route=mysql_real_escape_string($route);
		$sql="SELECT cover FROM destinations WHERE codeName='$route'";
		$query=mysql_query($sql);
		$data=mysql_fetch_object($query);


	?>
	<img src="<?php echo $data->cover; ?>" style="width:100%;" height="450" alt="cover">
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
	<?php require_once('partials/footer.php'); ?>
<!--  -->
</body>
</html>