<?php
	$firstName = "Giver";
	$lastName = " Khadka";

	// Dot (.) is used to do string concatination
	// Output: My name is Giver Khadka
	echo "My name is " . $firstName . $lastName;
	// Output: My name starts with G
	echo "My name starts with $firstName[0]";					
	// Output: My name is of length: 5
	echo "My name is of lenght: " . strlen($firstName);			
	// Output: My name in capital is: GIVER
	echo "My name in capital is: " . strtoupper($firstName);	
	// Output: My name in small letter is: giver 
	echo "My name in small letter is: " . strtolower($firstName);	
	// str_replace(substr_to_replace, replacer_str, original_str);
	// Output: Replaced string is Student 
	$replaced = str_replace($firstName, "Student", $firstName);	
	echo "Replaced string is $replaced"; 	
?>