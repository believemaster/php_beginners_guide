<?php
/**
* Return User authentication system
*
* @return boolean true if user is logged in, false otherwise.
**/

function isLoggedIn()
{
	return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}

?>
