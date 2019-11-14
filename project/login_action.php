<?php
	session_start();
		
	include 'db.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select email, password from users where email = '$username' and password = md5('$password')";
	$result = $con->query($sql);
	
	if ($result == false) {
		echo '<a href="login.php">Error: cannot execute query</a>';
		exit;
	}
	
	$num_rows = mysqli_num_rows($result);

	if ($num_rows >= 1) {
		$_SESSION['login'] = "OK";
		$_SESSION['username'] = $username;
		header('Location: private.php');
		mysql_close($link);
		die();
	}
	
	mysqli_close($link);
	
	header('Location: login.php');
?>