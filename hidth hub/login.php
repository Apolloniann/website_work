<?php
    include"header.php"
?>
<html>
<head>
<title>Hadith Hub login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
    <form action="login_in.php" method="post">
<div class="wthree-dot">
	<h1>Hadith Hub login</h1>
	<div class="profile">
		<div class="wrap">
			<div class="content-main">
				<div class="w3ls-subscribe w3ls-subscribe1">
					<h2>You have an account?</h2>
					<form action="login_in.php" method="post">
                        <input type="text" name="txtname" placeholder="User Name" required="">
						<input type="password" name="Password" placeholder="Password" required="">
						<input type="submit" value="Login">
                        <tr>
				<td colspan="2">
					<?php
						if(isset($_GET["Message"]))
							echo $_GET["Message"];
					?>
				</td>
			</tr>
					</form>
				</div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2018 Hadith Hub Login Form. All rights reserved | Design by <a href="index.php">Hadith Hub</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>