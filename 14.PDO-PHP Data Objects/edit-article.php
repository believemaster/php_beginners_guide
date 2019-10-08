<?php
require 'classes/Database.php';
require 'classes/Article.php';
require 'include/url.php';

// PDO check PDO comments and look back earlier codes in project
$db = new Database();
$conn = $db->getConn();

if (isset($_GET['id']))  // validate the query_string
{

	$article = Article::getByID($conn, $_GET['id']);	// PDO (function calling from Article class)

	if(!$article)
	{
		die("Article not found.");
	}

} else {
	die("id not supplied, article not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$article->title = $_POST['title'];
	$article->content = $_POST['content'];
	$article->published_at = $_POST['published_at'];

		if($article->update($conn)){
				redirect("article.php?id={$article->id}");
			}
		}
?>

<?php require 'include/header.php' ?>

<h2>Edit Article</h2>

<?php require 'include/article-form.php'; ?>

<?php require 'include/footer.php' ?>
