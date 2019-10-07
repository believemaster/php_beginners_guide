<?php
require 'include/database.php';
/*
require will halt the script to continue and give fatal error
include will continue the script and just show error
*/
if (isset($_GET['id']) && is_numeric($_GET['id']))  // validate the query_string
{
$sql = "SELECT *
				FROM article
				WHERE id = " . $_GET['id']; // getting article with sepcific id

var_dump($sql);

$results = mysqli_query($conn, $sql);

if ($results === false){
	echo mysqli_error($conn);
} else {
	$article = mysqli_fetch_assoc($results);
}
} else {
	$article = null;
}
?>


<?php require 'include/header'; ?>
			<?php if ($article===null): ?>
				<p>No Article found.</p>
			<?php else: ?>
							<article class="">
								<h2><?= $article['title']; ?></h2>
								<p><?= $article['content']; ?></p>
							</article>
			<?php endif; ?>
<?php require 'include/footer.php'; ?>
