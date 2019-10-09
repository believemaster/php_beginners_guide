<?php

require 'classes/Database.php';
require 'classes/Article.php';
require 'include/url.php';
require 'include/auth.php';

session_start();

if(!isLoggedIn()){
	die("UnAuthorized");
}

	$article =  new Article();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$db = new Database();
		$conn = $db->getConn();

		$article->title = $_POST['title'];
		$article->content = $_POST['content'];
		$article->published_at = $_POST['published_at'];

		if($article->create($conn)){
				redirect("article.php?id={$article->id}");
			}
	}

?>

<?php require 'include/header.php' ?>

<h2>New Article</h2>

<?php require 'include/article-form.php'; ?>

<?php require 'include/footer.php' ?>
