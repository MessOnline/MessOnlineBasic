<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<section id="content">
			<form action="includes/login.inc.php" method="POST">
				<h1>Login Form</h1>
				<div>
					<input type="text" name="uid" placeholder="Email" required="" id="username">
				</div>
				<div>
					<input type="password" name="pwd" placeholder="Password" required="" id="password">
				</div>
				<div>
					<input type="submit" name="submit" value="Log In">
					<a href="register.html">Register</a>
				</div>
			</form><!-- form -->
		</section><!-- content -->
	</div><!-- container -->
</body>

<script  src="js/index.js"></script>
</body>
</html>