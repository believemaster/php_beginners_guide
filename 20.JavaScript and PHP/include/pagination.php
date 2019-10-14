<?php $base = strtok($_SERVER["REQUEST_URI"], '?'); ?> <!--sets the delimiter in url with '?' so that ?page=1 not repeat-->

<nav>
	<ul>
		<li>
			<?php if ($paginator->previous): ?>
				<a href="<?php $base; ?>?page=<?php $paginator->previous ?>">Previous</a>
			<?php else: ?>
				Previous
			<?php endif; ?>
		</li>
		<li>
			<?php if ($paginator->next): ?>
				<a href="<?php $base; ?>?page=<?php $paginator->next ?>">Next</a>
			<?php else: ?>
				Next
			<?php endif; ?>
		</li>
	</ul>
</nav>
