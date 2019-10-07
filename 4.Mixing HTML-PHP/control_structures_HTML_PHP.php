<?php

 	$hour = 15;
	// same things can be done for while for and other structues
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Control Structure in HTML-PHP</h1>

		<?php if($hour < 12): ?>
			Good Morning<br>
		<?php elseif($hour < 18): ?>
			Good Afternoon<br>
		<?php elseif($hour < 22): ?>
			Good Afternoon<br>
		<?php else: ?>
			Good Night<br>
		<?php endif; ?>

	</body>
</html>
