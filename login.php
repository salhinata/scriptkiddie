<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login 21stCLASS</title>
	<link rel="stylesheet" type="text/css" href="admin/style.css">
    <style>
	.header {
		background: lavender;
	}
	button[name=login_btn] {
		background: purple;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>21stCLASS Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Do not have an account? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>