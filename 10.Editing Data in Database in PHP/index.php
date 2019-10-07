<?php
require 'include/database.php';
$conn = getDB();

$sql = "SELECT *
				FROM article
				ORDER BY published_at";

$results = mysqli_query($conn, $sql);

if ($results === false){
	echo mysqli_error($conn);
} else {
	$articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>


<?php require 'include/header.php'; ?>
	<a href="new-article.php">Add New Article</a>
			<?php if (empty($articles)): ?>
				<p>Oops!.No articles are there.</p>
			<?php else: ?>
				<ul>
					<?php foreach ($articles as $article): ?>
						<li>
							<article class="">
								<h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
								<p><?= htmlspecialchars($article['content']); ?></p>
							</article>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
<?php require 'include/footer.php' ?>
