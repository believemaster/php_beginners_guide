<?php if (!empty($article->errors)): ?>
	<ul>
		<?php foreach ($article->errors as $error): ?>
			<li>
				<?= $error ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<form method="post" id="formArticle">

	<div class="">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" placeholder="Article Title" value="<?= htmlspecialchars($article->title); ?>">
	</div>

	<div class="">
		<label for="content">Content</label>
			<textarea name="content" rows="4" cols="40" id="content" placeholder="Article Content"><?= htmlspecialchars($article->content) ?></textarea>
	</div>

	<div class="">
		<label for="published_at">Publication Date & Time</label>
		<input type="datetime-local" name="published_at" value="<?= htmlspecialchars($article->published_at) ?>">
	</div>
	<fieldset>
		<legend>Categories</legend>
		<?php foreach ($categories as $category): ?>
			<div>
				<input type="checkbox" name="category[]" value="<?= $category['id'] ?>"
							 id="category<?= $category['id'] ?>"
							 <?php if (in_array($category['id'], $category_ids)): ?>checked<?php endif; ?>>
				<label for="category<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></label>
			</div>
		<?php endforeach; ?>
	</fieldset>
	<button>Save Article</button>

</form>
