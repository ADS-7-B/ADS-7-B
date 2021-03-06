<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/bg-01.jpg');   background-repeat: no-repeat; background-size: cover; font-family:arial;">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label style="font-size:16px;">Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label style="font-size:16px;">Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label style="font-size:16px;">Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label style="font-size:16px;">Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button style="margin: 5px 0 0 324px;" type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			<a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>