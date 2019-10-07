<?php

$data = [
				"first", "second", "third"
				];
// echo "$data"; // Array can't be echo out as it gives string conversions error
// var_dump($data) // prints array but not in same format it is

/* we camn print elements in a way like this but it's hell lot of code
Who will print the elements one by one.
*/
// echo $data[0];
// echo $data[1];
// echo $data[2];

// solution is looping out array : simplest loop in array is foreach loop
foreach ($data as $value) {
	echo $value. ", ";		// code block (no semicolon after code block)
}
?>
