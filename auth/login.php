<?php
	require_once("../config/db.php");
	require_once("../middelware/check_auth.php");

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body class="bg-dark">
	<?php 
		require_once("../includes/header.php");
	?>
	<div class="d-flex justify-content-center align-content-center flex-column" style="height: calc(100vh - 64px)">
		<div class="d-flex justify-content-center container">
			<div class="col-md-8">
				<form action="auth.php" method="POST">
					<input type="text" class="form-control mb-2" placeholder="nickname" name="nickname">
					<input type="text"class="form-control mb-2" placeholder="password" name="password">
					<button class="btn btn-secondary w-100">Login</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>