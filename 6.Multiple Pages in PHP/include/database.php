<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "2vJ651YkqC4gOqhr";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// mysqli_connect_error() functions checks the error in connection
if(mysqli_connect_error()){
	echo mysqli_connect_error();
	exit;
}
