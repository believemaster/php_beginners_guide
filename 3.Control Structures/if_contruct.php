<?php
if(true)
{
	echo "Condition is True<br><br>";
}

// Empty array control
$array=[];
var_dump(empty($array));
if(empty($array))
{
	echo "<br>Empty array condition<br><br>";
}

// Full Array Control
$array_two=["one","two","three"];
var_dump(empty($array));
if(empty($array_two))
{
	echo "<br>Empty array condition<br><br>";
}
else
{
	echo "<br>Else part condition false<br><br>";
}


?>
