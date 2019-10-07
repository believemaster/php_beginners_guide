<?php
// While
$month = 1;

while($month <= 12)
{
	echo $month.", ";
	$month = $month + 1; // or	$month += 1;
}
echo "<br>";

// For
for($week=1; $week<=7; $week++)  // or $week+=1 or $week = $week+1
{
	echo "{$week} ,";
}
echo "<br>";
?>
