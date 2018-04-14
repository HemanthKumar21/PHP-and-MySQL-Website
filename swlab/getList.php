<?php $db = mysqli_connect('localhost', 'root', '', 'registration');?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
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
            <li><a href="register.php">Register</a></li>
            <li class="active"><a href="getList.php">Student Data</a></li>
        </ul>
    </div>
	<div class="header">
		<h2>Student Data</h2>
	</div>
	<div class="container">            
	<table class="table">
		<thead>
		<tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Email</th>
		</tr>
		</thead>
		<?php 
		$result = mysqli_query($db,"SELECT * FROM users");
		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "</tr>";
		}
		?>
    </table>
	</div>
</body>
</html>
