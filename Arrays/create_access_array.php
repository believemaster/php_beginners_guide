<?php

$array = 	["First",
						"Second",
						"Third",
						"Fourth"
					];

echo "Showing the array type with size and values inside:<br>";
var_dump($array);
echo "<br><br>Showing the Third Element value in array:<br>";
var_dump($array[2]);		// index starts from zero i.e. 3rd value is 2
// var_dump($array[5]); // we'll get error message of undefined offset because array index is offset
?>
