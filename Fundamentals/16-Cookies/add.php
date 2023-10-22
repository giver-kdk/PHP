<?php
echo "See Data: <br>";
if (isset($_POST["submit"])) {
	// 'setcookie(key, value, expiry_date)'
	// Here, 'time()' returns current time. '10000' is in milliseconds.
	setcookie("gender", $_POST["gender"], time() + 10000);
	header("Location: index.php");
}
// Run this code on 'delete' button clicked
else if (isset($_POST["delete"])) {
	// Set expiry date to past time for deleting cookie
	setcookie("gender", $_POST["gender"], time() - 10000);
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session in PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		form {
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
		<div class="form-check">
			<input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender" checked value="Male">
			<label class="form-check-label" for="flexRadioDefault1">
				Male
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender" value="Female">
			<label class="form-check-label" for="flexRadioDefault2">
				Female
			</label>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="text" name="delete" class="btn btn-primary">Delete</button>
	</form>
</body>

</html>