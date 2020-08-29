<?php

namespace ProcessWire;

$prodItems = pages()->find('template=biz_card-type|postcard-type|flyer-type|sticker-type|invitation-type|greet_card-type|letterhead-type|display-type');

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
<!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
<div class="tw-element uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
    <?php
    $imageLink = '';
    foreach ($prodItems as $item) {

        $imageLink = getImageUrlFromImages($item->images, $item->productt_show_out_fields->image_name)
    ?>
        <div>
            <div class="tw-element tw-box">
                <img src="<?= $imageLink ?>" alt="<?= $item->title ?>" title="<?= $item->title ?>" />
                <h4>
                    <?= $item->title ?>
                </h4>
                <p>
                    <?= $item->productt_show_out_fields->sub_title_01 ?>
                </p>
                <p>
                    <?= $item->productt_show_out_fields->sub_title_02 ?>
                </p>
                <p class="description">
                    <?= $item->productt_show_out_fields->description ?>
                </p>
                <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?> </span><i class="ion-ios-arrow-thin-right"></i></span></a>

            </div>
        </div>
    <?php
    }

    ?>

</div>