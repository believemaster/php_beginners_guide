<?php
$message = "Hello, PHP";
echo $message;

// string chars quotes
$var = 'hello';
$clock = '3\'o clock'; //escape char \
$days = 'Monday \n Tuesday \n Wednesday';  //next ine char

echo "string ". $var; //correct
echo "$var string"; //correct and called variable interpolation
//or
echo "{$clock} time";
?>
