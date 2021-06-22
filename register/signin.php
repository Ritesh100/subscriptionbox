<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>signin</title>
		
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
	
		<link rel="stylesheet" href="css/style.css">
	</head>
 
	<body>
  <div>
   <?php 
    include('../header.php');
     ?>
  </div>
		<div class="wrapper">
			<div class="inner">
			<!-- 	<img src="images/image-1.png" alt="" class="image-1"> -->
				<form action="">
					<h3>Login Here</h3>
				
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Enter Your Email"style="padding-left: 50px;">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password"style="padding-left: 50px;">
					</div>
					<div class="terms_and_cons d_none">
    <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
					<button class="login">
						<span>Login</span>
					</button>
					  <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    

  
    </div>
				</form>
		<!-- 		<img src="images/image-2.png" alt="" class="image-2"> -->
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>