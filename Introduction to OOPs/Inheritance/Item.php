<?php

class item
{
	public $name;
	protected $code = 1234;  // can be accessed indirectly via inheriting and can be accessed using subclasses but not directly

	public function getListingDescription()
	{
		return "Item: ".$this->name; // shown in child class too
	}
}
