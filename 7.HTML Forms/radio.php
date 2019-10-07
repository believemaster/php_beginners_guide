<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<form method="post">
			<p>Which is your fav color?</p>
			<div>
				<input type="radio" name="color" value="red"> Red <br>
			</div>
			<div>
				<input type="radio" name="color" value="green" checked> Green <br>
			</div>
			<div>
				<input type="radio" name="color" value="blue"> Blue <br>
			</div>
			<button>Submit</button>
		</form>

	</body>
</html>
