<?php

class Book extends Item		// inherit the item class
{
	public $author;

	public function getListingDescription()
	{
		return parent::getListingDescription()." by ".$this->author; 		// overiding parent class method [parent::getListingDescription() is getting parent class line]
	}
	public function getCode()
	{
		return $this->code;
	}
}
