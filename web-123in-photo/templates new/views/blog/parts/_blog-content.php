<?php namespace ProcessWire;

// get all blog entries
$blogPosts = pages()->get("template=blog-posts")->children("limit=8");

// no found
if( !count($blogPosts) ) {
	files()->include('views/blog/parts/_no-found.php');
}

// pagination
$pagination = ukPagination($blogPosts);
?>

<div class="content-area uk-width-expand@m">
	<div class="tw-element tw-blog grid-blog uk-child-width-1-2@s uk-grid-large" data-uk-grid data-uk-scrollspy="target: > article; cls:uk-animation-slide-bottom-small; delay: 400;">
		<?php
		foreach ($blogPosts as $item) {
			echo files()->render(
				'views/blog/parts/_blog-article.php',
				[
					'item' => $item,
					// 'options' => [],
				]
			);
		}
		?>
	</div>

	<div class="tw-pagination pagination-border">
		<div class="older">
		<?= $pagination ?>
		</div>
	</div>
</div>

	

