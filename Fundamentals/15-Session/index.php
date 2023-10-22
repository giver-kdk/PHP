<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		.btn
		{
			margin: 0.5rem;
		}
		h1, .btn__box
		{
			width: 100%;
			text-align: center;
			margin: 0.5rem;
		}
	</style>
</head>
<body>
	<h1>Welcome to the HomePage.
	<?php 
		// Initialize 'session' before use
		session_start();
		if($_SESSION["name"])
		{
			echo $_SESSION["name"];
		}
	?>
	 </h1>
	<div class="btn__box">
		<a href="./add.php"><button type="button" class="btn btn-primary">Add Name</button></a>
	</div>
</body>
</html>