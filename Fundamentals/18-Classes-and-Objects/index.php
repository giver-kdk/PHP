<?php
	class Student
	{
		public $name;			// Public Variable which can be directly accessed
		public $roll;
		// Private variable which needs to be accessed via internal function 
		private $symbol;
		// Constructoer function 
		public function __construct($name = "Guest", $roll=0)
		{
			// Set variable of object as specified 
			$this->name = $name;
			$this->roll = $roll;
		}
		public function getSymbol()
		{
			echo "Symbol No. of " . $this->name . " is: " . $this->symbol . "<br>";
		}
		public function setSymbol($symbol)
		{
			$this->symbol = $symbol;
		}
	}
	// Creating object with constructor
	$student1 = new Student();						// Default constructor
	$student2 = new Student("Giver Khadka", 05);
	// Accessing object's variables
	echo $student1->name . "<br>";
	echo $student2->name . "<br>";
	// We can interact with private variable only through class methods
	$student2->setSymbol(1234);
	echo $student2->getSymbol() . "<br>";

	// $student2->symbol;							// This is not allowed
?>