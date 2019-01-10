<?php
	$host		="localhost";
	$username	="root";
	$password	="";
	$db			="project_db";

	$mysqli 	= new mysqli($host, $username,$password,$db);
	if (mysqli_connect_errno()) {
		die();
	}
?>