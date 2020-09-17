<?php

namespace ProcessWire;


?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <!-- section how it work -->
    <?= files()->render('views/printfinity-parts/_printfi-how-it-work.php') ?>
    <!-- section how it work HẾT -->

    <!-- section các sản phẩm -->
    <section class="uk-section uk-section-muted">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->printfi_product_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->printfi_product_block->description ?>
                </p>
            </div>
            <!-- render các items -->
            <div class="tw-element uk-text-center uk-width-1-1 uk-width-2-4@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
                <?php echo files()->render('views/printfinity-parts/_printfi-product-items.php'); ?>
            </div>
            <!-- nút bấm tât cả sản phẩm -->
            <div class="tw-element tw-heading uk-text-center">
                <a href="<?= $page->printfi_product_block->url_all_product ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $page->printfi_product_block->url_link_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>
    </section>

    <!-- section các sản phẩm HẾT -->

    <!-- giới thiệu men u-->
    <section class="uk-section">
        <div class="uk-container">
            <?php
            $imageLink = '';
            $imageLink = getImageUrlFromImages($page->images, $page->title_image_name);
            ?>
            <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-card-media-left uk-cover-container">
                    <img src="<?= $imageLink ?>" alt="Hình tiêu đề" uk-cover>
                    <canvas width="500" height="320"></canvas>
                </div>
                <div class="uk-card-body">
                    <?= $page->body ?>
                </div>

            </div>
        </div>

    </section>



</pw-region>