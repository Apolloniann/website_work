<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "police";
	
	$conn = new MySQLi($server, $user, $pass, $db);
	
	if(MySQLi_connect_error()){
        die('connect error )'.MySQLi_connect_errono().')'.MySQLi_connect_error());
    }
    else{
        echo"zeeshan";
    }
    
?>