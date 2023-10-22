
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
		.card-group
		{
			gap: 1rem;
			/* margin: 1rem; */
		}
		.card
		{
			border-radius: 7px !important;
		}
		.card__wrapper
		{
			padding: 1rem;
		}
	</style>
</head>
<body>
	<h1>Welcome to the HomePage</h1>
	<div class="btn__box">
		<a href="./add.php"><button type="button" class="btn btn-primary">Add Pizza</button></a>
	</div>
	<?php
		include "connect_db.php";
		$sql = "SELECT * FROM pizza";
		// Execute the SQL Query and store result
		$result = $conn->query($sql);
		// 'fetch_assoc()' returns next row data everytime as associative array
		echo "<br><strong>Pizza List: </strong><br>";
		echo "<div class='card__wrapper'>";
		while($row = $result->fetch_assoc())
		{
			echo "
			<div class='card-group'>
				<div class='card text-white bg-info mb-3' style='max-width: 18rem;'>
				<div class='card-header'>". $row['title'] . "</div>
				<div class='card-body'>
				<h5 class='card-title'>By: " . $row['email'] . "</h5>
				<p class='card-text'>Ingredient: The main ingredients used to make this pizza are: " . $row['ingredient'] . ".</p>
				</div>
			</div>
			";
		}
		echo "</div>";
	?>
</body>
</html>