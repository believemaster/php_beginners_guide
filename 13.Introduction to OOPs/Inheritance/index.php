<?php
require 'Item.php';
require 'Book.php';

$my_item = new Item();
$my_item->name = 'TV';

echo $my_item->getListingDescription();

echo "<br>";

$book = new Book();
$book->name = 'Hamlet';
$book->author = 'Shakespear';

echo $book->getListingDescription();

echo "<br>";
// echo $my_item->code;
echo "<br>";

$book = new Book();
echo $book->getCode();
