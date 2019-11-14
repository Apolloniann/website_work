<?php
	include "conect.php";

	$user = $_POST["txtname"];
	$pass = $_POST["Password"];
  
$qry = "SELECT password FROM profile WHERE name = '".$user."'";

	$res = $conn->query($qry);

	if($res->num_rows>0)
	{
		$row = $res->fetch_assoc();
		if($row["password"] == $pass)
		{
				header("Location:after_login.php");
		}
		else 
		{
			//error
			$msg = "Invalid Password!";
			header("Location:login.php?Message=$msg");
		}
	}
	else
	{
		//user name does not exist
		$msg = "User does not exist";
		header("Location:login.php?Message=$msg");
	}
?>