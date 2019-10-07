<?php

// else if

$hour = 15;

if($hour < 12)
{
	echo "Good Morning<br>";
}
else if($hour < 18)
{
	echo "Good Afternoon<br>";
}
else if($hour < 22)
{
	echo "Good Afternoon<br>";
}
else {
	echo "Good Night<br>";
}

// Switch
$day = "Sat";

switch ($day) {
	case 'Mon':
		echo "Monday<br>";
		break;
	case 'Tue':
		echo "Tuesday<br>";
		break;
	case 'Wed':
		echo "Wednesday<br>";
		break;
	case 'Thur':
		echo "Thursday<br>";
		break;
	case 'Fri':
		echo "Firday<br>";
		break;
	case 'Sat':
		echo "Saturday<br>";
		break;
	case 'Sun':
		echo "Saturday<br>";
		break;

	default:
		echo "In valid Choice<br>";
		break;
}


?>
