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

			<div class="">
				Text: <input type="text" name="title">	<!--input is an empty element that doesn't wrap any content-->
			</div>
			Textarea:<textarea name="content" rows="7" cols="50">Textarea</textarea>	<!--textarea has opening and closing tags-->
			<button>Submit</button>
		</form>

	</body>
</html>
