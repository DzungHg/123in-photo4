<?php

namespace ProcessWire;

// get items
$blogPosts = pages()->get("template=blog-posts")->children("categories=$page, limit=12");

// no items found
if (!count($blogPosts)) {
	files()->include('views/blog/parts/_no-found.php');
}
//
$pagination = ukPagination($blogPosts);
?>

<!-- Nội dung trang -->
<pw-region id="page-content">
	<!-- head image and cubersome END -->
	<?= files()->render('views/template-parts/_basic-page-header.php') ?>
	<!-- head image and cubersome -->
	<!-- -->
	<section class="uk-section uk-section-blog">
		<div class="uk-container">
			<div data-uk-grid>
			
				<!--vùng content bên trái -->
				<div class="content-area uk-width-expand@m">
					<div class="tw-element tw-blog grid-blog uk-child-width-1-2@s uk-grid-large" data-uk-grid data-uk-scrollspy="target: > article; cls:uk-animation-slide-bottom-small; delay: 400;">
					<?php
					foreach ($blogPosts as $item) {
					echo files()->render('views/blog/parts/_blog-article.php',
						[
							'item' => $item,
							// 'options' => [],
						]);
					}
					?>
					</div>
						<!-- pagination -->
					<div class="tw-pagination pagination-border">
						<div class="older">
						<?= $pagination ?>
						</div>
					</div>
				</div>	
				<!--vùng content bên trái HẾT -->
				
				<!-- sidebar HẾT-->
				<?php echo files()->include('views/blog/parts/_blog-sidebar.php') ?>
				<!-- sidebar HẾT-->
			</div>
		</div>
	</section>

</pw-region>
<!--bỏ nhận mẫu và đăng ký nhận bản tin-->
<section id="order-sample"></section>
<section id="sign-up-newsletter"></section>