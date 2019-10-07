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
<!-- Built in validations in html -->
		<form method="post">
			<div>
				PostCode: <input name="postcode" pattern="(\d{5}([\-]\d{4})?)" title="Please Enter Valid US Post Code">		<!--this is us pattern & patters at html5patterns.com-->
			</div>
			<div>
				Email: <input type="email" name="email" required>
			</div>
			<div>
				Url: <input type="url" name="url">
			</div>
			<div>
				Number: <input type="number" name="count" min="1" max="10" required>
			</div>
			<button>Submit</button>
		</form>

	</body>
</html>
