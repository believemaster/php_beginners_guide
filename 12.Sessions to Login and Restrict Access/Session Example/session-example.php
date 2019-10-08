<?php
// session data is returned to a file by default this can be slow therefore to store small values like boolean or id's
// session_start() should be called before showing any content on the browser because session uses cookies and cookied data is send in headers.

// SESSION = on server the before sending requested html page session is created with session id to manage the state that the page is used before.

	session_start();

	$sess = $_SESSION['count'];

	if(isset($sess)){
		$_SESSION['count']++;
	} else {
		$_SESSION['count'] = 1;
	}
	var_dump($sess);
?>
