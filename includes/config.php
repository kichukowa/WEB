<?php
	ob_start(); //wait until you have all the data before sending it to the server
	session_start();

	$timezone = date_default_timezone_set("Europe/Sofia");

	//connection variable
	$con = mysqli_connect("localhost", "root", "", "audioanotator"); //server, username, password, db

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno(); //gets the error
	}
?>