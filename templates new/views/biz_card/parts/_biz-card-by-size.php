<?php

namespace ProcessWire;

$paperCate = pages()->get("template=biz_card-category, code_num=2"); //'2 : theo kích thước
$cardBySizes = pages()->get("/danh-thiep/")->children("biz_card_categories=$paperCate");
?>
<!-- đã bọc ngoài bởi div container và section -->
<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?= $page->biz_card_by_size_block->title ?>
    </h3>
    <p class="subtitle">
        <?= $page->biz_card_by_size_block->description ?>
    </p>
</div>
<!--chỉ 4 kích thước-->
<div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
    <?php
    $imageUrl = '';
    foreach ($cardBySizes as $item) {
        $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
    ?>
        <div>
            <div class="tw-element tw-box uk-text-center">
                <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                <h4>
                    <?= $item->title ?>
                </h4>

                <?= $item->product_front_intro_text ?>

                <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>

    <?php
    }
    ?>

</div>