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
echo "Connected Successfully<br>";

$sql = "select * from article order by published_at";

$results = mysqli_query($conn, $sql);

if ($results === false){
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

	var_dump($articles);
}

?>
