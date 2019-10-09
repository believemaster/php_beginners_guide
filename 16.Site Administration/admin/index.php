<?php
require '../include/init.php';

Auth::requireLogin();

$conn = require '../include/db.php';

$articles = Article::getAll($conn);

?>


<?php require '../include/header.php'; ?>
<h2>Administrator</h2>

<p><a href="new-article.php">Add New Article</a></p>

			<?php if (empty($articles)): ?>
				<p>Oops!.No articles are there.</p>
			<?php else: ?>
				<table>
					<thead>
						<th>Title</th>
					</thead>
						<tbody>
							<?php foreach ($articles as $article): ?>
								<tr>
									<td>
										<a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
				</table>
			<?php endif; ?>
<?php require '../include/footer.php' ?>
