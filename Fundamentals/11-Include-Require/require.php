<?php
	echo "Start of require. <br>";
	// Just adds up the code from 'component.php'
	require "component.php";
	require "component.php";
	require "component.php";

	// If filename is wrong with 'require', that 'require' part will not run.
	// Also, other part of the PHP code will not run
	echo "End of require. <br>";
?>