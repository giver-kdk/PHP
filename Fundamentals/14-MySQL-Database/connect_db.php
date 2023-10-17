<?php
	// Connect to DB using mysqli(host, username, password, dbname, port, socket)
	$conn = new mysqli("localhost", "root", "form_db");
	if($conn->connect_error) echo "Connection Failed";
?>