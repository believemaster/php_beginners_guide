<?php
$articles = [
					[
						"title"=>"First",
						"content"=>"this is content of first"
					],
					[
						"title"=>"Second",
						"content"=>"this is content of second"
					],
					[
						"title"=>"Third",
						"content"=>"this is content of third"
					],
					[
						"title"=>"Fourth",
						"content"=>"this is content of fourth"
					]
				];
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
		</main>
	</body>
</html>
