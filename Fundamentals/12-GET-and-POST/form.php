<?php
	// '$_GET' is a predefined global array
	if(isset($_GET["submit"]))		
	{
		// This code runs when form is submitted 
		echo $_GET['email'];
	}
?>
<html>
    <head><title>Get Method</title></head>
    <body>
    	<form action="form.php" method="get">
    		<div>
    			<label for="mail">Email: </label>
    			<input type="email" name="email" id="mail">
    		</div>
    		<button type="submit" name="submit">Submit</button>
    	</form>
    </body>
</html>