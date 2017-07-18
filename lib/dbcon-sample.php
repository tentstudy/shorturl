<?php 
		$dbhost = 'your host';
		$dbuser = 'your database user';
		$dbpass = 'your database password';
		$database = 'your database name';

	//CONNECTION
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
	mysqli_set_charset($connection, "utf8");
?>