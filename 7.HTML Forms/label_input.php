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
				<label for="title">Title</label>:<input type="text" name="title" id="title">
			</div>
			<div>
				Content: <textarea name="title" rows="4" cols="40"></textarea>
			</div>
			<div>
				<label>
					<input type="checkbox" name="visible" value="yes">Visible
				</label>
			</div>
			<!-- for checkbox and radio button label can be wrapped around directly without id either way is good -->
			<div>
				<p>Color:</p>
					<input type="radio" name="color" value="red" id="r"> <label for="r">Red</label> <br>
					<input type="radio" name="color" value="green" id="g"> <label for="g">Green</label> <br>
					<input type="radio" name="color" value="blue" id="b"> <label for="b">Blue</label> <br>
			</div>
			<button>Submit</button>
		</form>

	</body>
</html>
