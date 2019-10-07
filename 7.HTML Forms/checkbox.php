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
			<div>
				<input type="checkbox" name="terms" value="yes" checked> I Agree the Terms & Conditions
			</div>
			<button>Submit</button>
		</form>

		<form method="post">
			<p>Which is your fav color?</p>
			<div>
				<input type="checkbox" name="color[]"> Red
			</div>
			<div>
				<input type="checkbox" name="color[]"> Green
			</div>
			<div>
				<input type="checkbox" name="color[]"> Blue
			</div>
			<button>Submit</button>
		</form>

	</body>
</html>
