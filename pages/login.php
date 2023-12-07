<?php

session_start();

include '../config/connection.php'; // Include the database connection file

if (isset($_COOKIE['emailid']) && isset($_COOKIE['password'])) {
	$emailid = $_COOKIE['emailid'];
	$password = $_COOKIE['password'];
} else {
	$emailid = $password = "";
}

if (isset($_POST['submit'])) {

	$email = strtolower($_POST['email']);
	$password = $_POST['password'];

	$sql = "SELECT users.id, users.name, users.email, users.password FROM users WHERE users.email = '$email' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$hashedPassword = $row['password'];

		if (password_verify($password, $hashedPassword)) {
			// Password is correct
			$_SESSION['email'] = $email;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id']; // Store the user's ID in the session

			echo "<script>alert('Login successful'); window.location.href = '../index.php';</script>";

			if (isset($_REQUEST['rememberMe'])) {
				setcookie('emailid', $_REQUEST['email'], time() + 60 * 60);
				setcookie('password', $_REQUEST['password'], time() + 60 * 60);
			} else {
				setcookie('emailid', $_REQUEST['email'], time() - 10); // 10 seconds
				setcookie('password', $_REQUEST['password'], time() - 10); // 10 seconds
			}
		} else {
			// echo 'Incorrect password. Please try again.';
			echo "<script>alert('Login Failed'); window.location.href = 'login.php';</script>";
		}
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>DeltaWeb|Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login-vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="post">
					<span class="login100-form-logo">
						<img src="../images/deltaweb.png" width="100" class=" img-fluid round-circle" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="email" id="name" placeholder="email"
							value="<?php echo $emailid; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="password"
							value="<?php echo $password; ?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<label>
						<input type="checkbox" name="rememberMe" id="remember_me" <?php if (isset($_COOKIE["emailid"])) { ?> checked <?php } ?>> Remember me
					</label>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn">

						</input>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="../config/forgot.php">
							Forgot Password? <a href="signup.php"> Create one!</a>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="loginMessage"></div>


	<!--===============================================================================================-->
	<script src="../login-vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../login-vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="../login-vendor/bootstrap/js/popper.js"></script>
	<script src="../login-vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../login-vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../login-vendor/daterangepicker/moment.min.js"></script>
	<script src="../login-vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="../login-vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="../js/main.js"></script>


</body>

</html>