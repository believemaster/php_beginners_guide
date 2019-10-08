<?php

require 'item.php';
/*
// try out by uncommenting:
// $my_item = new Item();

// $item2 = new Item();

//calling via object
// $my_item->name = 'Example';

// $item2->name = 'Another Example';

// $my_item->description;


$my_item->sayHello();
echo "<br>".$my_item->getName()." ".$item2->getName();


// var_dump($my_item);

// var_dump($my_item->description); // gives specified property

$my_item = new Item('Huge', 'A Big Team');
 var_dump($my_item);


/*
//via setter fxn
$my_item = new Item();
// use setter to assign the values
$my_item->setName("example");
$my_item->setDescription("this is example description");

echo $my_item->getName();
*/

// calling static variable
// var_dump(Item::$count); // before object creation
/*
$my_item = new Item('Huge', 'A big team');
// var_dump(Item::$count); // after object creation

$my_item = new Item('Small', 'A tiny team');
Item::showCount();

$my_item->name = "A new Name";
echo $my_item->getName();
*/

$my_item = new Item();
$count = 0;
$count ++ ;
// define is used for constants outside a class and their value can't be change
define('MAXIMUM', 100);
define('COLOR', 'red');
// define('MAXIMUM', 200); // invalid
echo MAXIMUM;
echo Item::MAX_LENGTH; 		// accessing constants from class
