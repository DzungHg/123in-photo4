<?php

namespace ProcessWire;

$imageUrl = $vars['imageUrl'];
$ukMuted = $vars['ukMutedText'];
//
$wSPage = pages()->get('/web-settings/');
//nếu trang cụ thể không cung cấp hình thì lấy hình default trong setting
if (trim($imageUrl) == '') {
    $imageUrl = getImageUrlFromImages($wSPage->images, $wSPage->order_sample_fields->image_name); //tên thường lấy ở ngoài
}


?>
<section id="order-sample" pw-optional class="uk-section <?= $ukMuted ?> uk-section-small uk-text-center uk-flex uk-flex-middle uk-flex-center">
    <div class="tw-element uk-inline uk-scrollspy-inview uk-animation-slide-top-small" style="">
        <img src="<?= $imageUrl ?>">
        <div class="uk-position-center">
            <div class="tw-element call-content">
                <h2><?= $wSPage->order_sample_fields->title ?></h2>
            </div>
            <div>
                <a href="<?= $wSPage->order_sample_fields->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $wSPage->order_sample_fields->url_link_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>
    </div>
</section>