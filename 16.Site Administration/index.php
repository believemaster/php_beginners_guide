<?php
require 'include/init.php';


$conn = require 'include/db.php';

$articles = Article::getAll($conn);

?>


<?php require 'include/header.php'; ?>

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
