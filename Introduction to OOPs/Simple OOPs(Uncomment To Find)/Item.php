<?php

	class Item
	{
		public CONST MAX_LENGTH = 24;		// constants are defined at top level in class these are also static values and default public

		public $name;
		public $description="This is default value";
		public static $count = 0;	// static variable

		function __construct($name, $description)	// contructor put it before any methods for visibility
		{
			// echo "In the constructor<br>"; 	// called each time the object of class is created
			$this->name = $name;
			$this->description = $description;
			static::$count++; // creating new object increase count
		}

		function sayHello()
		{
			echo "Hello class!";
		}
		/*
		private function getName() // can't access outside class (restricted) & methods are public by default
		{
			return $this->name; 	// this represents the current object/instance of class
		}
		*/
		public function getName()
		{
			return $this->name;
		}
		public static function showCount()
		{
			echo static::$count;
		}

	}

/*
//Getter And Setter

class Item
{
	private $name;
	private $description;

	// getter for name
	public function getName()
	{
		return $this->name;
	}

	//setter for name
	public function setName($name)
	{
		$this->name = $name;
	}

	// getter for description
	public function getDescription()
	{
		return this->desctription;
	}
	// setter for description
	public function setDescription()
	{
		this->desctription = $description;
	}
}
*/
