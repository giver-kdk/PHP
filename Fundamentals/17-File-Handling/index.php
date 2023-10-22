<?php
	$fileName = "myFile.txt";
	$handler = fopen($fileName, "r+");		// Read and Write Mode
	// $handler = fopen($fileName, "r");			// Read Mode
	// $handler = fopen($fileName, "a+");		// Append Mode

	// Read upto specified size of file 
	$data = fread($handler, filesize($fileName));
	echo $data . "<br>";

	// Read single line of file
	// echo fgets($handler) . "<br>";
	// Read single character of file
	// echo fgetc($handler) . "<br>";

	fwrite($handler, "\nThis is new content being overwritten from last point of reading it.\n");

	fclose($handler);

	// rename($fileName, "ourFile.txt");		// Rename File

	// unlink($fileName);						// Delete File

	// mkdir("data");							// Create Folder
?>
