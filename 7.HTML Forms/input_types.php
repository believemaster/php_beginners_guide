<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	var_dump($_POST);			// name should be specified in input type to show if blank name then it dump blank blank
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
				Text: <input type="text" name="text" value="Default Value">
			</div>
			<div class="">
				Password: <input type="password" name="password">
			</div>
			<div class="">
				Telephone: <input type="tel" name="telephone">
			</div>
			<div class="">
				Url: <input type="url" name="url">
			</div>
			<div class="">
				Date: <input type="date" name="date">
			</div>
			<div class="">
				Time: <input type="time" name="time">
			</div>
			<div class="">
				Week: <input type="week" name="week">
			</div>
			<div class="">
				Month: <input type="month" name="month">
			</div>
			<div class="">
				Color: <input type="color" name="color">
			</div>
			<div class="">
				Email: <input type="email" name="email">
			</div>
			<div class="">
				Range: <input type="range" name="rane">
			</div>
			<div class="">
				Hidden: <input type="hidden" name="invisible" value="1324">
			</div>
			<div class="">
				Number: <input type="number" name="number">
			</div>
			<div class="">
				Search: <input type="search" name="search">
			</div>
			<div class="">
				DateTime-local: <input type="datetime-local" name="datetime">
			</div>
			<button>Submit</button>
		</form>

	</body>
</html>
