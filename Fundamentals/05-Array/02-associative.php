<?php
	// ***** Assiciative Array *****
	$array1 = ["fName"=>"Giver", 123=>"ID"];
	// Push new element in array
	$array1[456] = "SN";
	// Output: Giver
	echo $array1["fName"];
	// Output: 10 is the ID
	echo "123 is the " . $array1[123];
	echo "456 is the " . $array1[456];

	$array2 = array("lName"=>"Khadka", "likes"=>"Music");
	$array3 = array_merge($array1, $array2);
	/*  Output: 
		Array
		(
			[fName] => Giver
			[0] => ID
			[1] => SN
			[lName] => Khadka
			[likes] => Music
		)	
	*/
	print_r($array3);
	// Output: Length of array3 is 5
	echo "Length of array3 is " . count($array3);

	$index1 = [1, 2, 3];
	// Merging Indexed and Associative array
	$mix = array_merge($index1, $array1);
	/*  Output: 
		Array
		(
			[0] => 1
			[1] => 2
			[2] => 3
			[fName] => Giver
			[3] => ID
			[4] => SN
		)
	*/
	print_r($mix);
?>