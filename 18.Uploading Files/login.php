<?php
require 'include/init.php';

// $_SESSION['is_logged_in'] = true; // for testing purposes

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$conn = require 'include/db.php';

	if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {
		Auth::login();
		// redirect('/'); //will not work right now because directory is not root
		header("location:index.php");
	} else {
		$error = "login incorrect";
	}
}

?>
<?php require 'include/header.php' ?>

	<?php if (!empty($error)): ?>
		<p><?= $error ?></p>
	<?php endif; ?>

	<h2>Login</h2>
	<form action="" method="post">
		<div>
			<label for="username">Username</label>
			<input type="text" name="username" id="username">
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</div>
		<button>Log In</button>
	</form>

<?php require 'include/footer.php' ?>
