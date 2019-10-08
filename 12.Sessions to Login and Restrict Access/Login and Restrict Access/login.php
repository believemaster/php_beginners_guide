<?php
require 'include/url.php';
session_start();

// $_SESSION['is_logged_in'] = true; // for testing purposes

if($_SERVER['REQUEST_METHOD']=='POST')
{
	if ($_POST['username']=='yanik' && $_POST['password']=='secret') {
		session_regenerate_id(true);		// helps to prevent sessoin fixation attacks
		// die("login correct");
		$_SESSION['is_logged_in'] = true;
		// redirect('/'); //will not work right now because directory is not root
		redirect('index.php');
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
