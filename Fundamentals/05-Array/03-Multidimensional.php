<?php
	// 2D Indexed Array
	$array1 = [
		[1, 2, 3],
		[4, 5, 6],
		[7, 8, 9]
	];
	// Output: 6
	echo $array1[1][2];
	// Pushing new elements
	array_push($array1, [10, 11, 12]);
	print_r($array1);

	// 2D Associative Array
	$array2 = [
		["fName"=>"James", "lName"=>"Lee", "age"=>32],
		["fName"=>"David", "lName"=>"Martin", "age"=>28],
		["fName"=>"Olivia", "lName"=>"Wilson", "age"=>21]
	];
	// Output: 28
	echo $array2[1]["age"];

	// Pushing new elements in 2D Associative Array
	array_push($array2, ["fName"=>"Emily", "lName"=>"Johnson", "age"=>30]);
	print_r($array2);
	
?>