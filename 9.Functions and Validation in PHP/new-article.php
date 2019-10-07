<?php

require 'include/database.php'; // include database above but not executing

	$errors = [];
	$title = '';
	$content = '';
	$published_at = '';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$title = $_POST['title'];
		$content = $_POST['content'];
		$published_at = $_POST['published_at'];

		if($title=='')
		{
			$errors[] = "Title is Required";
		}
		if ($content=='')
		{
			$errors[] = "Content is Required";
		}
		if($published_at != '')
		{
			$date_time = date_create_form_format('Y-m-d H:i:s', $published_at);

			if ($date_time == false) {
				$error[] = "Invalid Date and Time";
			} else {
				$date_errors = date_get_last_errors();
				if($date_errors('warning_count'>0))
				{
					$errors[] = "Invalid Date & Time";
				}
			}
		}

		if(empty($errors))
		{

			$conn = getDB();	// calling functin from database file before executing queries

			$sql = "INSERT INTO article (title, content, published_at)
							VALUES (?, ?, ?)"; // placeholder for preventing sql injections

			$start = mysqli_prepare($conn, $sql);

			if ($results === false){

				echo mysqli_error($conn);

			} else {

				if ($published_at=="") {
					$published_at = null;
				}

				mysqli_stmt_bind_param($start, "sss", $title,$content,$published_at);

				if (mysqli_stmt_execute($stmt)) {

					$id = mysqli_insert_id($conn);

					if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off') {
						$protocol = 'https';
					} else {
						$protocol = 'http';
					}

					header("location: $protocol://".$_SERVER['HTTP_HOST']." article.php?id=$id");
					exit;

				} else {
					echo mysqli_stmt_error($stmt);
				}
			}
		}
	}

?>

<?php require 'include/header.php' ?>

<h2>New Article</h2>

<?php if (!empty($errors)): ?>
	<ul>
		<?php foreach ($errors as $error): ?>
			<li>
				<?= $error ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<form method="post">

	<div class="">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" placeholder="Article Title" value="<?= htmlspecialchars($title); ?>">
	</div>

	<div class="">
		<label for="content">Content</label>
			<textarea name="content" rows="4" cols="40" id="content" placeholder="Article Content"><?= htmlspecialchars($content) ?></textarea>
	</div>

	<div class="">
		<label for="published_at">Publication Date & Time</label>
		<input type="datetime-local" name="published_at" value="<?= htmlspecialchars($published_at) ?>">
	</div>
	<button>Add Article</button>

</form>

<?php require 'include/footer.php' ?>
