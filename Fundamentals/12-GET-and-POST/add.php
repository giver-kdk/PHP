<?php
	// This runs everytime 'add.php' runs 
	echo "See Data: <br>";
	// 'isset()' checks is the variable has value or not
	// 'POST' method data is not visible in URL
	if(isset($_POST["submit"]))		// '$_GET' is a predefined global associative array
	{
		// This code runs only when submit button sets value of variables
		echo htmlspecialchars($_POST['email']);		// Access form fields 'value' using their 'name'
		echo "<br>";
		// 'htmlspecialchars' blocks attacker's JS code from running in browser
		echo htmlspecialchars($_POST['title']);
		echo "<br>";
		echo htmlspecialchars($_POST['ingredient']);
		echo "<br>";
	}
	// 'GET' method data is visible in URL. The URL itself contains the key:value pair of data
	// The key is the 'name' attribute of input field and value is the respective value
	// if(isset($_GET["submit"]))		// '$_GET' is a predefined global array
	// {
	// 	// This code runs only when submit button sets value of variables
	// 	echo htmlspecialchars($_GET['email']);		// Access form fields value using their 'name'
	// 	echo "<br>";
	// 	echo htmlspecialchars($_GET['title']);
	// 	echo "<br>";
	// 	echo htmlspecialchars($_GET['ingredient']);
	// 	echo "<br>";
	// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Pizza</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		form
		{
			width: 500px;
			margin: 1rem auto;
			border: 1px solid grey;
			filter: drop-shadow(0 0 5px 5px grey);
			border-radius: 7px;
			padding: 1rem;
		}
	</style>
</head>

<body>
	<!-- 'GET' method can also be used to send form data -->
	<!-- <form action="add.php" method="get">	 -->
	<form action="add.php" method="post">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Pizza Title</label>
			<input type="text" name="title" class="form-control" id="pizza__title">
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Ingredient</label>
			<input type="text" name="ingredient" class="form-control" id="ingredient">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</body>

</html>