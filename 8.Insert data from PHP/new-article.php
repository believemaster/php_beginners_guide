<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		require 'include/database.php';

		$sql = "INSERT INTO article (title, content, published_at)
						VALUES (?, ?, ?)"; // placeholder for preventing sql injections

		$start = mysqli_prepare($conn, $sql);

		if ($results === false){

			echo mysqli_error($conn);

		} else {

			mysqli_stmt_bind_param($start, "sss", $_POST['title'],$_POST['content'],$_POST['published_at']);

			if (mysqli_stmt_execute($stmt)) {

				$id = mysqli_insert_id($conn);
				echo "Inserted record with ID: ".$id;

			} else {
				echo mysqli_stmt_error($stmt);
			}
		}
	}

?>

<?php require 'include/header.php' ?>

<h2>New Article</h2>
<form method="post">

	<div class="">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" placeholder="Article Title">
	</div>

	<div class="">
		<label for="content">Content</label>
			<textarea name="content" rows="4" cols="40" id="content" placeholder="Article Content"></textarea>
	</div>

	<div class="">
		<label for="published_at">Publication Date & Time</label>
		<input type="datetime-local" name="published_at" value="published_at">
	</div>
	<button>Add Article</button>

</form>

<?php require 'include/footer.php' ?>
