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

// $sql = "select * from article where id=0 order by published_at"; 	// testing blank database conditions
$sql = "select * from article order by published_at";

$results = mysqli_query($conn, $sql);

if ($results === false){
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<h1>Blog in PHP</h1>
		</header>
		<main>
			<?php if (empty($articles)): ?>
				<p>Oops!.No articles are there.</p>
			<?php else: ?>
				<ul>
					<?php foreach ($articles as $article): ?>
						<li>
							<article class="">
								<h2><?= $article['title']; ?></h2>
								<p><?= $article['content']; ?></p>
							</article>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</main>
	</body>
</html>
