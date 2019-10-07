<?php
// Arithmatic
$a = 10;
$b = 15;

$price = 20.5;
$tax = 2.1;

$first_name = "Yanik";
$last_name = "Kumar";

var_dump($a + 5);
var_dump($b - $a);

var_dump($price*$tax);

echo $first_name." ".$last_name;
// multiply string by integer we get integer result
$x = "150";
$y = 2;

$z = $x * $y;
var_dump($z);

// Logical

$is_admin = true;
$is_coder = false;

var_dump(! $is_admin);

var_dump($is_admin or $is_coder);	// use || for or
var_dump($is_admin and $is_coder);	// use && for and Lookup php docs


?>
