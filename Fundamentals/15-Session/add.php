<?php
	echo "See Data: <br>";
	if(isset($_POST["submit"]))		
	{
		// Initialize the use of session
		session_start();
		// Define custom key inside session. This value lasts even in website reload
		$_SESSION["name"] = $_POST["name"];
		// Notice that $_SESSION["name"] will persist in next page
		header("Location: index.php");
	}
	// Run this code on 'delete' button clicked
	else if(isset($_POST["delete"]))		
	{
		session_start();
		// Delete 'name' value from session
		unset($_SESSION["name"]);
		// session_unset();			// Clear all session values
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie in PHP</title>
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
	<form action="add.php" method="post">
		<div class="mb-3">
			<label for="user_name" class="form-label">Your Name</label>
			<input type="text" name="name" class="form-control" id="user_name">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="text" name="delete" class="btn btn-primary">Delete</button>
	</form>
</body>

</html>