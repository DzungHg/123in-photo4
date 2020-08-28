<?php

namespace ProcessWire;


?>
<!--phần block trên sản phẩm -->

<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?= $page->products_products_block->title ?>
    </h3>
    <p class="subtitle">
        <?= $page->products_products_block->description ?>
    </p>
</div>
<!-- -->
<div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
    <?php
    $imageLink = '';
    foreach ($page->product_repeaters as $item) {
        if ($item->type == 'products_favourite_product') {

            $imageLink = getImageUrlFromImages($page->images, $item->image_name);
    ?>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLink ?>" alt="<?= $item->image_alt_text ?>" />
                    <?= $item->description_ck ?>
                    <a href="<?= $item->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->caption_text ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                </div>
            </div>
    <?php
        }
    }

    ?>

</div>