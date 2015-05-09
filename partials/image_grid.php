	<style>
		h3{
			text-align: center;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/grid_component.css" />
	<div style="width:60%; margin:0 auto;" >
		 <!-- <li><a href="#"><img src="../img/thumbs/manali.png" style='width:100%;' border="0" alt="cover" /><div><h3>Hampi</h3></div></a></li> -->
		 <?php
		 	$codeName=$_GET['id'];
		 	require_once("config.php");
		 	$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
		 	mysql_select_db($DB_NAME);
		 	$codeName=mysql_real_escape_string($codeName);
		 	$sql="SELECT routes.id,routes.title AS route, routes.type,routes.image FROM routes,destinations WHERE belongsTo=destinations.id AND codeName='$codeName' AND routes.type = 'fixed';";
		 	$query=mysql_query($sql) or die(mysql_error());
			if(mysql_num_rows($query)){
		 		?>
					<h3>Fixed Date Treks</h3>
					<ul class="grid">
		 		<?php
		 	}

		 	while($data=mysql_fetch_object($query)){
		 		?>
				<li><a href="route.php?id=<?php echo $data->id; ?>"><img src="<?php echo $data->image; ?>" style='width:100%' border="0" alt=""><div><h3><?php echo $data->route; ?></h3></div></a></li>
		 		<?php

		 	}
		 ?>
		</ul>
		

		

		 <?php
		 	$codeName=$_GET['id'];
		 	require_once("config.php");
		 	$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
		 	mysql_select_db($DB_NAME);
		 	$codeName=mysql_real_escape_string($codeName);
		 	$sql="SELECT routes.id,routes.title AS route, routes.type,routes.image FROM routes,destinations WHERE belongsTo=destinations.id AND codeName='$codeName' AND routes.type='unique';";
			$query=mysql_query($sql) or die(mysql_error());
			if(mysql_num_rows($query)){
		 		?>
					<h3>Unique to us</h3>
					<ul class="grid">
		 		<?php
		 	}
		 	while($data=mysql_fetch_object($query)){
		 		?>
				<li><a href="route.php?id=<?php echo $data->id; ?>"><img src="<?php echo $data->image; ?>" style='width:100%' border="0" alt=""><div><h3><?php echo $data->route; ?></h3></div></a></li>
		 		<?php

		 	}
		 ?>
</ul>

		
		 <?php
		 	$codeName=$_GET['id'];
		 	require_once("config.php");
		 	$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
		 	mysql_select_db($DB_NAME);
		 	$codeName=mysql_real_escape_string($codeName);
		 	$sql="SELECT routes.id,routes.title AS route, routes.type,routes.image FROM routes,destinations WHERE belongsTo=destinations.id AND codeName='$codeName' AND routes.type='other';";
		 	$query=mysql_query($sql) or die(mysql_error());
		 	if(mysql_num_rows($query)){
		 		?>
					<h3>Check these out</h3>
					<ul class="grid">
		 		<?php
		 	}
		 	while($data=mysql_fetch_object($query)){
		 		?>
				<li><a href="route.php?id=<?php echo $data->id; ?>"><img src="<?php echo $data->image; ?>" style='width:100%' border="0" alt=""><div><h3><?php echo $data->route; ?></h3></div></a></li>
		 		<?php

		 	}
		 ?>

		
		
	<!-- </div> -->
<!-- 		<li><a href="#"><img src="../img/thumbs/ker.png" style='width:100%' border="0" alt=""><div><h3>Goa</h3></div></a></li>
		<li><a href="#"><img src="../img/thumbs/ker.png" style='width:100%' border="0" alt=""><div><h3>Goa</h3></div></a></li> -->			
	</ul>
	</div>
