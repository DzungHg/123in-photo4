<?php

namespace ProcessWire;

/**
 * The blog page uses URL segments ( /authors/{author-name}/ ) / ( /archives/2019/06/ )
 * https://processwire.com/docs/front-end/how-to-use-url-segments/
 *
 */

// we are only using 3 URL segments so send a 404 if there's more than 3
if (strlen(input()->urlSegment4)) throw new Wire404Exception();

// you should change the authors url slug in the _init.php file ( 'authors' => __('Authors') ) if the page has a different name than the authors
$authorsUrlSlug = sanitizer()->pageName(setting('authors'));
// you should change the archives url slug in the _init.php file ( 'archives' => __('Archives') ) if the page has a different name than the archives
$archivesUrlSlug = sanitizer()->pageName(setting('archives'));
	
// get items
//$blogPosts = pages()->get("template=blog-posts")->children("limit=8");
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
				<?php echo files()->include('views/blog/parts/_blog-content.php') ?>
				<!--vùng content bên trái HẾT -->
				<!-- side bard-->
				<?php echo files()->include('views/blog/parts/_blog-sidebar.php') ?>
				<!-- side bard HẾT-->
			</div>
		</div>
	</section>

</pw-region>
<!--bỏ nhận mẫu và đăng ký nhận bản tin-->
<section id="order-sample"></section>
<section id="sign-up-newsletter"></section>