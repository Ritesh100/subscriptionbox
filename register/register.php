<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
		<!-- 		<img src="images/image-1.png" alt="" class="image-1"> -->
				<form action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username"style="padding-left: 50px;">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control" placeholder="Phone Number"style="padding-left: 50px;">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="E-Mail"style="padding-left: 50px;">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password"style="padding-left: 50px;">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password"style="padding-left: 50px;">
					</div>
					<button>
						<span>Register</span>
					</button>
				</form>
			<!-- 	<img src="images/image-2.png" alt="" class="image-2"> -->
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>