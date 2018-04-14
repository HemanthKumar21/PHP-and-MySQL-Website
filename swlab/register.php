<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body style="background: #F8F8FF;">

	<img src="Visvesvaraya-National-Institute-of-Technology.png" alt="Vnit Logo" style="float:left;width:140px;height:140px">
    <h1 style="text-align:center">Visvesvaraya National Institute of Technology</h1>
    <div class="container">
        <h3 style="text-align:center">Student Portal</h3>
        <ul class="nav nav-pills nav-justified">
            <li><a href="home.html">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="register.php">Register</a></li>
            <li><a href="getList.php">Student Data</a></li>
        </ul>
    </div>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

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
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>