<?php 
	// Cek Submit
	if ( isset($_POST["submit"])){
		// Cek Account
		if ( $_POST["username"] == "adminku" && $_POST["password"] == "admin123"){
			header("Location: admin_page.php");
			exit;
		} else {
			$notfound = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Login Sederhana</title>
	<!-- Bootstrap 5 Alpha CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<!-- General CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br>
		
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="card bgku login-content shadow-lg border-0">
					<div class="card-body">
						<div class="text-center">
							<img class="logo" src="assets/img/logo.svg">
						</div>
					<h3 class="text-logo">Sign In</h3>
					<br><br>
					<?php if(isset($notfound)) : ?>
						<p class="text-center text-danger">Username or Password is Wrong!</p>
					<?php endif; ?>
					<form action="" method="post" class="text-center">
						<input class="form-control border-0" type="text" name="username" placeholder="Type Your Username">
						<br>
						<input class="form-control border-0" type="password" name="password" placeholder="Type Your Password">
						<br>
						<button class="btn btn-primary btn-sm border-0" type="submit" name="submit">Sign In</button>
						<p class="forgot"><a href="">Forgot Password?</a></p>
					</form>
					</div>
					<div class="nomember">
						<p class="text-center">Not a member? <a href="">Create an Account</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap 5 Alpha JavaScript Bundle CDN -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>