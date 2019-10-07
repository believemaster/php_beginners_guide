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
			<select name="choosed[]" multiple>
				<option value="guitar">Guitar</option>
				<option value="ukelele">Ukelele</option>
				<option value="drum">Drum</option>
				<option value="piano">Piano</option>
			</select>
			<button>Submit</button>
		</form>

		<form method="post">
			<select name="country">
				<optgroup label="Europe">
				<option value="germany">Germany</option>
				<option value="france">France</option>
				<option value="uk">United Kingdom</option>
				</optgroup>
				<optgroup label="Amera">
				<option value="brazil">Brazil</option>
				<option value="canada">Canada</option>
				<option value="usa" selected>United States</option>
				</optgroup>
			</select>
			<button>Submit</button>
		</form>

	</body>
</html>
