<?php
	$radius = 5;
	$pi = 3.14;

	// Power Output: Area is 78.52
	echo "Area is " . $pi * $radius**2;

	$radius++;
	// Output: Incremented radius is 6
	echo "Incremented radius is $radius";
	$radius--;
	// Output: Decremented radius is 5
	echo "Decremented radius is $radius";
	$radius += 20;
	// Output: Increased radius is 25
	echo "Increased radius is $radius";
	$radius -= 10;
	// Output: Decreased radius is 15
	echo "Decreased radius is $radius";
	$radius *= 2;
	// Output: Multiplied radius is 30
	echo "Multiplied radius is $radius";
	$radius /= 4;
	// Output: Divided radius is 7.5
	echo "Divided radius is $radius";
	
	// Output: Floor value of pi is 3
	echo "Floor value of pi is " . floor($pi);
	// Output: Ceil value of pi is 4
	echo "Ceil value of pi is " . ceil($pi);
	// Output: Predefined value of pi is 3.1415926535898
	echo "Predefined value of pi is " . pi();
	?>