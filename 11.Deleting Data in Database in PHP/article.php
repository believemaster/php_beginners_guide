<?php
require 'include/database.php';
require 'include/article.php';

$conn = getDB();

if (isset($_GET['id']))
{

	$article = getArticle($conn, $_GET['id']);

} else {
	$article = null;
}
?>


<?php require 'include/header.php'; ?>
			<?php if ($article===null): ?>
				<p>No Article found.</p>
			<?php else: ?>
							<article class="">
								<h2><?= htmlspecialchars($article['title']); ?></h2>
								<p><?= htmlspecialchars($article['content']); ?></p>
							</article>
							<a href="edit-article.php?id=<?= $article['id'];?>">Edit</a>
							<a href="delete-article.php?id=<?= $article['id'];?>">Delete</a>
			<?php endif; ?>
<?php require 'include/footer.php'; ?>
