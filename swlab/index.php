<?php $db = mysqli_connect('localhost', 'root', '', 'registration');?>
<?php 
	session_start(); 

	$errors = array(); 
	$status = "";
	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	if (isset($_POST['pass'])) {
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		if (count($errors) == 0) {
			$sql = "UPDATE users SET password='$password_1' WHERE username='{$_SESSION['username']}'";

			if(mysqli_query($db, $sql) == TRUE) {
				$status = "Updated";
			}
			else {
				$status = "failed";
			}
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
			<?php
			$user_check_query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
			$result = mysqli_query($db, $user_check_query);
			$user = mysqli_fetch_assoc($result);
			?>
			<p>Email : <strong><?php echo $user['email']; ?></strong></p>
			<br>
			Change Password :
			<form method="post" action="index.php">

			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="pass">Change</button>
			</div>
			</form>
			<?php echo '<p style="color:green;align:center">' . $status . '</p>'?>
			<br>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>