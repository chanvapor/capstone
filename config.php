<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'barangaymanga';

	$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$link)
	{
		die("failed to connect!");
	}
?>