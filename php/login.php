<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<div class="wrapper">
		<div class="title-text">
			<div class="title login">Welcome Back</div>
			<div class="title signup">Welcome</div>
		</div>
		<div class="form-inner">
			<form method="post" action="login.php">
				<?php include('errors.php'); ?>
				<div class="field">
					<input type="text" placeholder="Username" name="username" required>
				</div>
				<div class="field">
					<input type="password" placeholder="Password" name="password" required>
				</div>
				<div class="pass-link"><a href="#">Forgot password?</a></div>
				<div class="field btn">
					<div class="btn-layer"></div>
					<input type="submit" value="Login" name="login_user">
				</div>
				<div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
			</form>

		</div>
	</div>
</body>

</html>



<div class="form-inner">



</div>

</div>