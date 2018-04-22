<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/bg-01.jpg');   background-repeat: no-repeat; background-size: cover; font-family:arial;">

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label style="font-size:16px;">Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label style="font-size:16px;">Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button style="margin: 5px 0 0 346px;" type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			<a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>