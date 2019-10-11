<?php
require '../include/init.php';

Auth::requireLogin();

	$article =  new Article();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$conn = require '../include/db.php';

		$article->title = $_POST['title'];
		$article->content = $_POST['content'];
		$article->published_at = $_POST['published_at'];

		if($article->create($conn)){
				redirect("/admin/article.php?id={$article->id}"); // relative path
			}
	}

?>

<?php require '../include/header.php' ?>

<h2>New Article</h2>

<?php require 'include/article-form.php'; ?>

<?php require '../include/footer.php' ?>
