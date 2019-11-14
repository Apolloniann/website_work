<?php
    include "header.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Art Sign Up Form</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
		<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/sing_up_style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->

<link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
</head>
<body>

	<h1 class="header-w3ls">Sign Up Form</h1>
		
		<div class="art-bothside">
		<div class="Up-sign-form text-center">
		<h2> SIGN UP</h2>
		</div>
		<div class="mid-cls">
            <div class="art-right-w3ls">
				<form action="index1.php" method="post">
                    <div class="main">
                        <div class="form-left-to-w3l">
                            <p>Name</p>
                            <input type="text" name="name" placeholder="Name" required="">
							<div class="clear"></div>
						</div>
                        <div class="form-left-w3l">
                            <p>Email</p>
					        <input type="email" name="email" placeholder="Email" required="">
				        </div>
                        <div class="form-right-w3ls ">
                            <p>Password</p>
					        <input type="password" name="password" placeholder="Password" id="password" required="">
                            <div class="clear"></div>
                        </div>
                        <div class="form-right-w3ls ">
                            <p>Confirm Password</p>
                            <input type="password" name="confim" placeholder="Confirm Password" id="confirm_password" required>
						</div>
                        <div class="btnn">
                            <button type="submit">Sign Up</button><br>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
    </div>
	
<script>
    var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");
    
function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
    </body>
</html>