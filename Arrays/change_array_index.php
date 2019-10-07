<?php
$indexing = [
	// index can be whole number
					4=>"John",
					5=>"Alex",
					6=>"Lucy"
				];
echo "Showing the index of elements set mannually<br>";
var_dump($indexing);

 // there is no need to assign all the index & non assigned will be assigned automatically
 $random_index = [
	 								1=>"Guitar",
									3=>"Piano",
									"Ukelele",
									"Drums"
 									];
echo "<br><br>Showing the index of elements and non indexed are automatically indexed continuing from previous one<br>";
var_dump($random_index);

//Associative Array - array with string index
$associative = [
								"one"=>"Requirement",
								"two"=>"Design",
								"three"=>"implement",
								"four"=>"Test",
								"five"=>"Deploy",
								"six"=>"Maintain"
								];
echo "<br><br>Associative Array,<br>";
var_dump($associative);
echo "<br><br>Accessing elements in Associative array<br>";
var_dump($associative["two"]);
?>
