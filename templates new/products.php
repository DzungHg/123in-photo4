<?php namespace ProcessWire;
$albumAnh = pages()->get("/album-anh");
$albumAnhProds = $albumAnh->children;

$tranhAnh = pages()->get("/tranh-anh/");
$tranhAnhProds = $tranhAnh->children;

$phuKien = pages()->get("/phu-kien-trinh-bay/");
$phuKienProds = $phuKien->children;

?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    
    <!-- Album ảnh -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $albumAnh->prod_type_product_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $albumAnh->prod_type_product_block->description ?>
                </p>
            </div>
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
                <?php
                $imageUrl = '';
                foreach ($albumAnhProds as $item) {
                    $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
                ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                            <h4>
                                <?= $item->title ?>
                            </h4>
                            <p class="description">
                                <?= $item->teasing_text ?>
                            </p>
                            <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Album ảnh HẾT -->

       <!-- Tranh Ảnh -->
    <section class="uk-section uk-section-muted">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $tranhAnh->prod_type_product_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $tranhAnh->prod_type_product_block->description ?>
                </p>
            </div>
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
                <?php
                $imageUrl = '';
                foreach ($tranhAnhProds as $item) {
                    $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
                ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                            <h4>
                                <?= $item->title ?>
                            </h4>
                            <p class="description">
                                <?= $item->teasing_text ?>
                            </p>
                            <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Tranh ảnh HẾT -->

     <!-- Phụ kiện & trình bày -->
     <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $phuKien->prod_type_product_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $phuKien->prod_type_product_block->description ?>
                </p>
            </div>
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
                <?php
                $imageUrl = '';
                foreach ($phuKienProds as $item) {
                    $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
                ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                            <h4>
                                <?= $item->title ?>
                            </h4>
                            <p class="description">
                                <?= $item->teasing_text ?>
                            </p>
                            <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Tranh ảnh HẾT -->
    
</pw-region>