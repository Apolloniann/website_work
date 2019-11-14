<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "minifacebook2";
	
	$con = new MySQLi($server, $user, $pass, $db);
	
	if($con->connect_error)
		echo "Error: ".$con->connect_error;
    else
        echo "you are connected";
?>