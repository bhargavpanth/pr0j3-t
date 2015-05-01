<?php
	$test=<<<HEAD
	CREATE TABLE PlanYourWeekEnd(
		id INT PRIMARY KEY AUTO_INCREMENT,
		fname VARCHAR(100),
		lname VARCHAR(100),
		email VARCHAR(255),
		dob DATE,
		sex VARCHAR(10),
		address TEXT,
		city VARCHAR(255),
		state VARCHAR(100),
		country VARCHAR(100),
		mobile VARCHAR(15),
		referer VARCHAR(200)
		);
HEAD;
require_once("config.php");
?>