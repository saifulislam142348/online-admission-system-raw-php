<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <style type="text/css">
	body
{
	margin:auto;
	padding-left:10%;
	background:url('../images/bbb.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}
.header{background:url('../images/b33.jpg');}
.jumbotron{

		
		height:auto;
		background:url('../images/b2.jpg');
}
</style>
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form  class="jumbotron" method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>