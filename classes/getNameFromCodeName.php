<?php
	/**
	* 
	*/
	class getNameFromCodeName
	{
		private $con;
		private $DB_NAME;
		public function __construct($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME)
		{
			$con=mysql_connect($DB_HOST,$DB_USER,$DB_PASS);
			$this->con=$con;
			$this->DB_NAME=$DB_NAME;
		}
		public function getName($codeName){
			$con=$this->con;
			$DB_NAME=$this->DB_NAME;
			mysql_select_db($DB_NAME,$con) or die(mysql_error());
			$codename=mysql_real_escape_string($codeName,$con);
			$SQL="SELECT * FROM destinations WHERE codeName='$codeName'";
			$query=mysql_query($SQL) or die(mysql_error());
			$data=mysql_fetch_object($query) or die(mysql_error());
			return $data->title;
		}
	}
?>