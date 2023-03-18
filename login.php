<!DOCTYPE html>
<html>
<head>
	<title>Online Betting</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
</head>
<body>
	<div class="overlay">
		<div class="box animate__animated animate__bounceIn">
			<h2>Admin Login</h2>
			<img src="img/logo.jpg" class="logo">
			<form action="login.php" method="get">
				<p class="remind">Please enter your username and password to log in</p>
				<img src="img/user1.png" class="user">
				<input type="text" name="Username" class="username" placeholder="Username" required>
				<br>
				<img src="img/pass.png" class="pass">
				<input type="password" name="Password" class="password" placeholder="Password" required>
				<br><br><br><br>
				<input type="checkbox" name="" class="check" id="check">
				<label style="font-size: 12px;font-weight: 600;" for="check">Remember Me |</label>
				<a href="#" style="font-size: 12px;font-weight: 600;text-decoration: none;">Forget Password?</a>
				<input type="submit" name="send" class="submitbtn" value="Login">
			</form>
		</div>
	</div>
</body>
</html>	