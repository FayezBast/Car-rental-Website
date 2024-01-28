<html>
    <head>
        <title>Booking Details</title>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	

	
	<link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body>

        <h1 align="center" style="background-color:black;color:white">Welcome
            <?php
            session_start();
            if($_SESSION['name'])
            {
                echo $_SESSION['name'];
            }
            ?>
        </h1>
         <body style="background-color: #999999;">  
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/1.jpg');"></div>
            
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="connect_dash.php" method="post">
					<span class="login100-form-title p-b-59">
						Book Your Car
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="User address..">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Age is required">
						<span class="label-input100">Age</span>
						<input class="input100" type="text" name="age" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "No. of Days required">
						<span class="label-input100">No. of days</span>
						<input class="input100" type="number" min="1" max="100" name="days" >
						<span class="focus-input100"></span>
					</div>

					


					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" type="submit">
								Submit
							</button>
						</div>
                        
					</div>
                    
                </form>  
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
        
    </body>
</html>