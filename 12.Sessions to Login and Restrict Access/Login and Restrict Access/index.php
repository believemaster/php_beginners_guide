<?php
require 'include/database.php';
require 'include/auth.php';

session_start();

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

<?php if (isLoggedIn()): ?>
	<p>You are Logged In<a href="logout.php"> Logout</a></p>
	<p><a href="new-article.php">Add New Article</a></p>
<?php else: ?>
	<p>You are not logged In.<a href="login.php"> Login</a></p>
<?php endif; ?>

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
