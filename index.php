<?php 
	
	require 'header.php';
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href=".css/home.css">

</head>
<body>


<div class="section">
		<div class="form">
			<form action="includes/login.inc.php" method="post">

				<label for="username">
					<b>Email/Phone:</b>
					<input type="text" name="mailphone" placeholder="phone or email...">
				</label><br><br>

				<label for="password">
					<b>Password:</b>
					<input type="password" name="password" placeholder="">
				</label><br><br>
				<button name="submit_btn1" class="submit_btn">SUBMIT</button><br>
				Haven`t registered yet?register<a href="signup.php"> here</a>
			</form>
		</div>
</div>












<?php 

	require 'footer.php';
 ?>
</body>
</html>