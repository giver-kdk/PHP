<?php
	function myFun()
	{
		echo "Hello World";
	}
	// Output: Hello World
	myFun();
	// Default parameters
	function myFun2($greet = "Hello", $name="Ram")
	{
		echo "$greet! $name. How are you?";
	}
	// Output: Hello! Ram. How are you? 
	myFun2();
	// Output: Hi! Ram. How are you? 
	myFun2("Hi");
	// Output: Hi! Shyam. How are you? 
	myFun2("Hi", "Shyam");
?>