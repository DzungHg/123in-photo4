<?php

namespace ProcessWire;
// get latest blog post
$latestBlogPosts = pages()->get("template=blog-posts")->children("sort=-date, limit=3");
$titleImageLink = '';
if ($page->template == "blog" || $page->template == "blog-category" )
{
	$titleImageLink = getImageUrlFromImages(page()->images, $page->title_image_name);
} else if ($page->template == "blog-post")
{
	$titleImageLink = getImageUrlFromImages($page->categories->first->images, $page->categories->first->title_image_name);
}
?>

<div class="sidebar-area">
	<div class="sidebar-inner" data-uk-sticky="bottom: true;offset: 40">
		<div class="widget-item">
			<aside class="widget widget_categories">
				<h3 class="widget-title"><span>Danh mục</span></h3>
				<ul>
					<?php
					foreach (pages()->find('template=blog-category') as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					}
					?>

				</ul>
			</aside>
		</div>

		<div class="widget-item">
			<aside class="widget tw-text-widget">
				<img src="<?=$titleImageLink?>" />
			</aside>
		</div>

		<div class="widget-item">
			<aside class="widget tw-post-widget">
				<h3 class="widget-title"><span>Bài mới nhất</span></h3>
				<ul>
				<?php
					foreach ($latestBlogPosts as $item)
					{
				 ?>
					<li>
						<div class="recent-thumb">
							<a href="<?=$item->url?>"><img src="<?=$item->images->first->url?>" alt="<?=$item->images->first->description?>" /></a>
						</div>
						<div class="recent-content">
							<h4>
								<a href="<?=$item->url?>"><?=$item->title?></a>
							</h4>
							<span class="entry-date"><?=$item->date?></span>
						</div>
					</li>
					<?php
					}
					?>
				</ul>
			</aside>
		</div>

		<div class="widget-item">
			<aside class="widget widget_wysija">
				<h3 class="widget-title"><span>Nhận Bản Tin</span></h3>
				<div class="widget_wysija_cont">
					<?php include('./promailer-subscribe.php');	?>
				</div>
			</aside>
		</div>
	</div>
</div>