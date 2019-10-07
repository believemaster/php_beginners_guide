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
			<fieldset>
				<legend>Article</legend>
				<div>
					<label for="title">Title</label>:<input type="text" name="title" id="title" placeholder="Article Title" value="Attribute Readonly" readonly>
				</div>
				<div>
					Content: <textarea autofocus name="title" rows="4" cols="40" placeholder="Article Content"></textarea>
				</div>
				<div>
					<label for="lang">Language</label>
					<select name="lang" id="lang">
						<option value="en">English</option>
						<option value="fr" disabled>French</option>
						<option value="gr">German</option>
					</select>
				</div>
		</fieldset>
		<fieldset>
			<legend>Attributes</legend>
			<div>
				<label>
					<input type="checkbox" name="visible" value="yes">Visible
				</label>
			</div>
		</fieldset>
			<!-- for checkbox and radio button label can be wrapped around directly without id either way is good -->
		<fieldset>
			<legend>Color</legend>
					<input type="radio" name="color" value="red" id="r"> <label for="r">Red</label> <br>
					<input type="radio" name="color" value="green" id="g"> <label for="g">Green</label> <br>
					<input type="radio" name="color" value="blue" id="b"> <label for="b">Blue</label> <br>
		</fieldset>
			<button>Submit</button>
		</form>

	</body>
</html>
