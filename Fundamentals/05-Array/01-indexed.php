<?php 
	// ***** Indexed Array *****
	$array1 = [2, 3];
	// Output: 2
	echo $array1[0];
	// 'print_r' means print in readable format
	// Output: Array([0] => 2 [1] => 3)
	print_r($array1);
	
	// Array of different data types
	$array2 = array("Ram", "Shyam", 10);
	// Output: 10
	echo $array2[2];
	
	// Output: Length of array2 is 3
	echo "Length of array2 is " . count($array2);
	// Output: Array([0] => 2[1] => 3[2] => Ram[3] => Shyam[4] => 10)
	$array3 = array_merge($array1, $array2);
	print_r($array3);

	array_push($array1, 4);
	// Output: Array([0] => 2[1] => 3[2] => 4)
	print_r($array1);
	
	array_pop($array1);
	// Output: Array([0] => 2[1] => 3)
	print_r($array1);


	// Converting String to Array
	$name = "Giver Khadka";
	$separate = explode(" ", $name);
	// Output: Array([0] => Giver [1] => Khadka)
	print_r($separate);
?>