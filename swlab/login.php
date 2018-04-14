<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="getList.php">Student Data</a></li>
        </ul>
    </div>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

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