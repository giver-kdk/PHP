<?php
	$array1 = [
		["fName"=>"James", "age"=>32],
		["fName"=>"David", "age"=>28],
		["fName"=>"Olivia", "age"=>21]
	];
	foreach($array1 as $person)
	{
		if($person["age"] < 30)
		{
			echo $person["fName"] . " is under age 30: "; 
		}
		else if($person["age"] > 30)
		{
			echo $person["fName"] . " is above age 30: "; 
		}
		else
		{
			echo $person["fName"] . " is of age 30: "; 
		}
		echo "Age: {$person["age"]}";
	}
?>