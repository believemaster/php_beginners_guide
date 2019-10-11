<?php
require 'include/init.php';


$conn = require 'include/db.php';

// $paginator = new Paginator(isset($_GET['page']) ? $_GET['page'] : 1, 5); // by using ternary operator
$paginator = new Paginator($_GET['page'] ?? 1, 5, Article::getTotal($conn));	 // php Null coalescing operator [if $_GET['page'] exist then it will show else other] + Total number of content

$articles = Article::getPage($conn, $paginator->limit, $paginator->offset);		// Show articles with page containing 5 article limit and 0 offset value

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

				<?php require 'include/pagination.php'; ?>
			<?php endif; ?>
<?php require 'include/footer.php' ?>
