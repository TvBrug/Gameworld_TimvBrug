<?php
function connectToDB()
{
	$host	= "localhost";
	$user	= "root"; 
	$pass	= ""; 
	$dB		= "gameworldgames"; 
	

	$conn = new mysqli($host, $user, $pass, $dB);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
		return $conn;
	}
}
?>