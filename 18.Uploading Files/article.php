<?php
require 'include/init.php';

// PDO check PDO comments and look back earlier codes in project
$conn = require 'include/db.php';

if (isset($_GET['id']))
{
	$article = Article::getByID($conn, $_GET['id']);	// PDO (function calling from Article class)
} else {
	$article = null;
}
?>


<?php require 'include/header.php'; ?>
			<?php if ($article): ?>
				<article class="">
					<h2><?= htmlspecialchars($article->title); ?></h2>
					<?php if ($article->image_file): ?>
						<img src="../uploads/<?= $article->image_file; ?>" alt="Content Image" height="240" width="360">
					<?php endif; ?>
					<p><?= htmlspecialchars($article->content); ?></p>
				</article>

			<?php else: ?>
				<p>No Article found.</p>
			<?php endif; ?>
<?php require 'include/footer.php'; ?>
