<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>NOTICE BOARD</title>
	</head>
	<body>
		<header>
			<h1>COLLEGE NOTICE BOARD</h1>
		</header>

		<nav>
			<ul>
				<li><a href="./index.php">Home</a></li>
				<?php if (Auth::isLoggedIn()): ?>
					<li><a href="admin/index.php">Admin</a></li>
					<li><a href="./logout.php">Logout</a></li>
				<?php else: ?>
						<li><a href="login.php">Login</a></li>
				<?php endif; ?>
			</ul>
		</nav>

		<main>

<!-- Note that these links are for temporary purpose using relative links when placing project in htdocs -->
<!--In Production Use Relative paths. Not valid Here because no root directory specified (These Links might not work correctly)
Use These:
'/' for home
'/logout' for logout
'/login' for login
'/admin/' for admin
 -->
