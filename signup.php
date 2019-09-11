<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href=".css/home.css">

</head>
<body>
<?php

	require 'header.php';

?>
<div class="section">
	<div class="wrapper">
		<div class="form">
			<form action="includes/signup.inc.php" method="POST" >

				<label for="userName">
					<b>User Name:</b>
					<input type="text" name="userName" placeholder="enter username..." autofocus>
				</label><br><br>

				<label for="firstName">
					<b>First Name:</b>
					<input type="text" name="firstName" placeholder="enter firstname..." autofocus>
				</label><br><br>

				<label for="lastName">
					<b>Last Name:</b>
					<input type="text" name="lastName" placeholder="enter lastname..." autofocus>
				</label><br><br>

				<label for="email">
					<b>Email:</b>
					<input type="email" name="email" placeholder="enter email..." autofocus>
				</label><br><br>

				<label for="phone">
					<b>Phone:</b>
					<input type="text" name="phone" placeholder="enter phone number..." autofocus>
				</label><br><br>

				<label for="county">
					<b>County:</b>
					<input type="text" name="county" placeholder="enter county..." autofocus>
				</label><br><br>

				<label for="password">
					<b>Password:</b>
					<input type="password" name="password" placeholder="" autofocus>
				</label><br><br>

				<label for="confirm-password">
					<b>Confirm Password:</b> 
					<input type="password" name="password1" placeholder="" autofocus>
				</label><br><br>

				<button name="submit_btn1" class="signup-btn">SUBMIT</button>
				
			</form>

		</div>
	</div>
</div>

<?php
	require 'footer.php';
?>
</body>
</html>