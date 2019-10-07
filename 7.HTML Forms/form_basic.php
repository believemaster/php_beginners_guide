<?php
var_dump($_GET)

// use get for search queries and getting page
// use post for changing database

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Forms</title>
	</head>
	<body>
		<!-- redirects to other page <form action="process_form.php">-->
		<form>
			<input type="text" name="search" value="">

			<button>Send</button>
		</form>
	</body>
</html>
