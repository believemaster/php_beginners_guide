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
		<title>Form</title>
	</head>
	<body>
			<form method="post">
				<input type="text" name="username">
				<input type="password" name="password">
				<button>Submit</button>
			</form>
	</body>
</html>
