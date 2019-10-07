<?php

var_dump(3==5); // false
var_dump(4==4); // true

// Equal (==)
$a = 21;
if($a==21){
	echo "<br><br>{$a} = 21<br>Condition is True<br>";
}
else {
	echo "<br>{$a} = 21<br>Condition is False<br>";
}
// Not Equal (!=)
$a = 21;
if($a!=21){
	echo "<br>{$a} != 21<br>Condition is True<br>";
}
else {
	echo "<br>{$a} != 21<br>Condition is False<br>";
}
// Less Than (<)
$a = 21;
if($a<50){
	echo "<br>{$a} < 50<br>Condition is True<br>";
}
else {
	echo "<br>{$a} < 50<br>Condition is False<br>";
}
// Greater Than (>)
$a = 21;
if($a>21){
	echo "<br>{$a} > 21<br>Condition is True<br>";
}
else {
	echo "<br>{$a} > 21<br>Condition is False<br>";
}
// Greater equal Than (>=) or (<= for less than equal)
$a = 21;
if($a>=15){
	echo "<br>{$a} > 21<br>Condition is True<br>";
}
else {
	echo "<br>{$a} > 21<br>Condition is False<br>";
}

// Other operations
/*
$a == $b	Equal	TRUE if $a is equal to $b after type juggling.
$a === $b	Identical	TRUE if $a is equal to $b, and they are of the same type.
$a != $b	Not equal	TRUE if $a is not equal to $b after type juggling.
$a <> $b	Not equal	TRUE if $a is not equal to $b after type juggling.
$a !== $b	Not identical	TRUE if $a is not equal to $b, or they are not of the same type.
$a < $b	Less than	TRUE if $a is strictly less than $b.
$a > $b	Greater than	TRUE if $a is strictly greater than $b.
$a <= $b	Less than or equal to	TRUE if $a is less than or equal to $b.
$a >= $b	Greater than or equal to	TRUE if $a is greater than or equal to $b.
$a <=> $b	Spaceship	An integer less than, equal to, or greater than zero when $a is respectively less than, equal to, or greater than $b. Available as of PHP 7.
*/

?>
