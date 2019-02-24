<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>21stCLASS Sign Up</title>
    <link rel="stylesheet" href="admin/style.css">
     <style>
	.header {
		background: lavender;
	}
	button[name=register_btn] {
		background: purple;
	}
	</style>
</head>
<body>
<div class="header">
	<h2>21stCLASS Sign Up</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Sign Up</button>
	</div>
	<p>
		Have an account? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>