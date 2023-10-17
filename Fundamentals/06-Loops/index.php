<?php
	// For Loop
	for($i = 0; $i < 5; $i++)
	{
		echo "Hello World";
	}
	// For Each Loop
	$array1 = [1, 2, 3, 4, 5];
	foreach($array1 as $item)
	{
		echo $item;
	}
	// While Loop
	$i = 0;
	while($i < 5)
	{
		echo "Hello World";
		$i++;
	}
	// Do While Loop
	$i = 0;
	do
	{
		echo "Do Hello World";
		$i++;
	}while($i < 5);
?>