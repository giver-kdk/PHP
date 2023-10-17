<?php
	echo "Start of Include. <br>";
	// Just adds up the code from 'component.php'
	include "component.php";
	include "component.php";
	include "component.php";

	// If filename is wrong with 'include', that 'include' part will not run.
	// But, other part of the PHP code will run
	echo "End of Include. <br>";
?>