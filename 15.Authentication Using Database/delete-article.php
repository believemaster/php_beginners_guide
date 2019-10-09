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

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if($article->delete($conn))
		{
				redirect("index.php");
		}
	}
?>

<?php require 'include/header.php'; ?>

	<h2>Delete Article</h2>
	<form method="post">
		<p>Are You Sure?</p>
		<button>Delete</button>
		<a href="article.php?id=<?= $article->id;?>">Cancel</a>
	</form>

<?php require 'include/footer.php'; ?>
