<?php
	include "connect_db.php";
	echo "See Data: <br>";
	// Variables to persist their value on reload
	$email = $title = $ingredient = "";
	$error = ["emailError"=>"", "titleError"=>"", "ingredientError"=>""];
	if(isset($_POST["submit"]))		// '$_GET' is a predefined global associative array
	{
		// 'empty()' checks if the variable is empty or not
		if(empty($_POST["email"]))
		{
			// Setting the variable in PHP. So, HTML updates on reload
			$error["emailError"] = "You must enter an email.";
		}
		else
		{
			// Store email(either valid or invalid) to reuse on HTML reload
			$email = $_POST["email"];
			// 'pregmatch(regex, string)' returns true if regex matched. 
			// NOTE: Flag should be mentioned separately as an argument 
			if(preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+$/", $_POST["email"]))
			{
				echo htmlspecialchars($_POST['email']);
				echo "<br>";
			}
			else
			{
				$error["emailError"] = "Email must be valid.";
			}
		}
		if(empty($_POST["title"]))
		{
			$error["titleError"] = "You must enter a title.";
		}
		else
		{
			$title = $_POST["title"];
			if(preg_match("/(^[A-Za-z]{2,16})/", $_POST["title"]))
			{
				echo htmlspecialchars($_POST['title']);
				echo "<br>";
			}
			else
			{
				$error["titleError"] = "Title must be minimum of 2 characters.";
			}
		}
		if(empty($_POST["ingredient"]))
		{
			$error["ingredientError"] = "You must enter ingredient.";
			
		}
		else
		{
			$ingredient = $_POST["ingredient"];
			if(preg_match("/(^[A-Za-z]{2,16})/", $_POST["ingredient"]))
			{
				echo htmlspecialchars($_POST['ingredient']);
				echo "<br>";
			}
			else
			{
				$error["ingredientError"] = "Ingredient must be of minimum 2 characters.";
			}
		}
		// 'array_filter()' is same like 'array.filter()' in JS
		// It returns all possible non-empty values of array if no callback function provided 
		// LOGIC: If no errors, then 'array_filter()' returns emtpy and negation of 'empty' is true
		if(!array_filter($error))			
		{
			// Routes to 'index.php' 
			header("Location: index.php");	
		}
	}
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
		.error
		{
			color: red;
		}
	</style>
</head>

<body>
	<!-- 'GET' method can also be used to send form data -->
	<!-- <form action="add.php" method="get"> -->	
	<form action="add.php" method="post">
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" 
			id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" class="error"><?php echo $error["emailError"]; ?></div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Pizza Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $title; ?>" id="pizza__title">
			<div id="emailHelp" class="error"><?php echo $error["titleError"]; ?></div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Ingredient</label>
			<input type="text" name="ingredient" class="form-control" value="<?php echo $ingredient; ?>" id="ingredient">
			<div id="emailHelp" class="error"><?php echo $error["ingredientError"]; ?></div>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</body>

</html>