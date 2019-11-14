<?php
	$msg = "";
	include "conect.php";
	$Name  = $_POST["name"];
	$email = $_POST["email"];
	$passwod = $_POST["password"];
	$confrim = $_POST["confim"];

	$qry = "INSERT INTO profile VALUES ('".$Name."', '".$email."', '".$passwod."', '".$confrim."')";

    

	if($conn->query($qry) )
    {
		$msg = "user can be created!";
     header("Location:login.php?Message=$msg");
    }
	else 
    {
        $msg = "Error!";
      header("Location:sing_up.php?Message=$msg");
    }
    
	
		
?>
