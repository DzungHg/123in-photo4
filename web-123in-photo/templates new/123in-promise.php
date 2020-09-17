<?php

namespace ProcessWire;

$imageLink01 = '';
$imageLink02 = '';
$imageLink03 = '';
$imageLink04 = '';

$imageLink01 = getImageUrlFromImages($page->images, $page->m23in_promise_4blocks->image_name01);
$imageLink02 = getImageUrlFromImages($page->images, $page->m23in_promise_4blocks->image_name02);
$imageLink03 = getImageUrlFromImages($page->images, $page->m23in_promise_4blocks->image_name03);
$imageLink04 = getImageUrlFromImages($page->images, $page->m23in_promise_4blocks->image_name04);

$imageLinkVideo = '';
$imageLinkVideo = getImageUrlFromImages($page->images, $page->title_image_name);

?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <!-- 4 sản điểm nhấn của giấy -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->m23in_promise_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->m23in_promise_block->description ?>
                </p>
            </div>
            <!-- 4 card về promise ở đây-->
            <div class="tw-element uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageLink01 ?>">
                        <h4>
                            <?= $page->m23in_promise_4blocks->title01 ?>
                        </h4>
                        <p class="description">
                            <?= $page->m23in_promise_4blocks->description01 ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageLink02 ?>">
                        <h4>
                            <?= $page->m23in_promise_4blocks->title02 ?>
                        </h4>
                        <p class="description">
                            <?= $page->m23in_promise_4blocks->description02 ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageLink03 ?>">
                        <h4>
                            <?= $page->m23in_promise_4blocks->title03 ?>
                        </h4>
                        <p class="description">
                            <?= $page->m23in_promise_4blocks->description03 ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageLink04 ?>">
                        <h4>
                            <?= $page->m23in_promise_4blocks->title04 ?>
                        </h4>
                        <p class="description">
                            <?= $page->m23in_promise_4blocks->description04 ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="uk-section uk-section-muted">
        <div class="uk-container">
            <div class="uk-grid-collapse uk-child-width-1-1 uk-child-width-1-2@m  uk-child-width-1-1@s" data-uk-grid>
                <div id="video" class="entry-media uk-responsive-width tw-video" data-video="target:.tw-video-container;show_play:true;hide_pause:true;loop:true" data-uk-scrollspy="target: .promo-image-container; cls:uk-animation-slide-bottom-medium; delay: 400;">
                    <div class="promo-image-container">
                        <button type="button" class="tw-video-icon" data-uk-toggle="target: #video>*"><i class="ion-play"></i></button>
                        <img class="promo-image uk-box-shadow-small" src="<?= $imageLinkVideo ?>">
                    </div>
                    <div class="tw-video-container" hidden><iframe width="853" height="480" src="<?= $page->url_link ?>" allowfullscreen></iframe></div>
                </div>
                <div class="uk-flex uk-flex-middle">
                    <div class="tw-element promo-text-container full tw-box big-typography" data-uk-scrollspy="target: > *; cls:uk-animation-slide-bottom-medium; delay: 400;">
                        <?= $page->body ?>
                    </div>
                </div>
            </div>
        </div>

    </section>



</pw-region>