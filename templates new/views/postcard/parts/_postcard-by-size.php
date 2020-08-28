<?php

namespace ProcessWire;

$paperCate = pages()->get("template=postcard-category, code_num=2"); //'2 : theo kích thước
$postCardBySizes = pages()->get("/buu-thiep/")->children("postcard_categories=$paperCate");

//"background-color: #f7f7f7;"

?>

<!--chỉ 35 kích thước-->
<div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" data-uk-grid>
    <?php
    $imageUrl = '';
    foreach ($postCardBySizes as $item) {
        $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
    ?>
        <div>
            <div class="tw-element tw-box uk-text-center">
                <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                <h4>
                    <?= $item->title ?>
                </h4>
                <!-- CK Têxt-->
                <?= $item->product_front_intro_text ?>

                <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem chi tiết</span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>

    <?php
    }
    ?>
</div>