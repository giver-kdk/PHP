<?php
	// Local Variable 
	function fun1()
	{
		$name = "Ram";
		echo "Hello $name";
	}
	// Output: Hello Ram
	fun1();
	
	// Global Variable
	$name = "Shyam";
	function fun2()
	{
		global $name;				// Use global '$name'
		$name = "Hari";
		echo "Hello $name";
	}
	// Output: Hello Hari
	fun2();
	echo $name;
	// Passing global variable by value
	function fun3($name)
	{
		$name = "Gopal";
		echo "Hello $name";
	}
	// Output: Hello Gopal
	fun3($name);
	// Output: Hari
	echo $name;
	
	// Passing global variable by reference
	function fun4(&$name)
	{
		$name = "Giver";
		echo "Hello $name";
	}
	// Output: Hello Giver
	fun4($name);
	// Output: Giver
	echo $name;
?>