<?php

namespace ProcessWire;

// if isset Options from render or included files
isset($options) ? '' : $options = array();

// default options to merge
$defaults = [
	'disable_img' => false,
	'img_width' => count($item->images) ? $item->images->first->width : '',
	'img_height' => count($item->images) ? $item->images->first->height : '',
	// you should change the authors url slug in the _init.php file ( 'authors' => __('Authors') ) if the page has a different slug than the authors
	'authors_url_slug' => sanitizer()->pageName(setting('authors')),
	// user Nick Name
	'nick_name' => $item->createdUser->nick_name,
	// user slug to page
	'nick_pagename' => sanitizer()->pageName($item->createdUser->nick_pagename, true),
	// unformatted date from fields ( date )
	'date' => wireDate('Y/m/d', $item->getUnformatted("date")),
	'date_archives_url' => pages()->get("template=blog")->url .
		sanitizer()->pageName(setting('archives')) . '/' . wireDate('Y/m/', $item->getUnformatted("date")),
];

// Merge Options
$options = array_merge($defaults, $options);
?>

<article class="post">
	<div class="entry-post">
		<div class="entry-media">
			<div class="tw-thumbnail">
				<a href="<?= $item->url ?>" title="<?= $item->title ?>">
					<img src="<?= $item->images->first->url ?>" alt="<?= $item->images->first->description ?: $item->name ?>" />
				</a>
			</div>
		</div>
		<div class="entry-cats tw-meta">
			<a href="<?= $item->categories->first->url ?>" title="Xem Tất Cả Bài Trong <?= $item->categories->first->title ?>"><?= $item->categories->first->title ?></a>
		</div>
		<h2 class="entry-title">
			<a href="<?= $item->url ?>"><?= $item->title ?></a>
		</h2>
		<div class="entry-content">

			<p>
				<?= $item->render('body', 'text-medium') ?>
			</p>
			<p class="more-link">
				<a class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover" href="<?= $item->url ?>"><span class="tw-hover-inner"><span><?= setting('read-more') ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
			</p>
		</div>
	</div>
</article>