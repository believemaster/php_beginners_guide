<?php
setcookie('example', 'hello', time() + 60*60*24*2, '/');
// by default cookie is set to end of session i.e. browser close. By using this time ()
// we can change the timelimit(here 2days). Cookies also have the location path to avail cookie to whole domain path
// should be set to root: '/'

echo "Cookie set.";



/* COOKIE =
	on client side i.e. browser the session id is saved as cookies which the session automatically genertes on server side.
	Simple words cookies are small strings of text that a website can store in a browser. website store the value in cookie which
	can be used later in subsequent request.
	Cookies can store anything and is not secured.
*/
?>
