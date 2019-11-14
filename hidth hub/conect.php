<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "hadith_hub";
	
	$conn = new MySQLi($server, $user, $pass, $db);
	
	if(MySQLi_connect_error())
    {
        die('connect error )'.MySQLi_connect_errono().')'.MySQLi_connect_error());
    }
    else
    {
    }
    
?>