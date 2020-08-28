<?php

namespace ProcessWire;

$paperCate = pages()->get("template=flyer-category, code_num=2"); //'2 : theo kích thước
$flyerBySizes = pages()->get("/to-roi/")->children("flyer_categories=$paperCate");

//"background-color: #f7f7f7;"
$backGroundColor = '';
$backGroundColor = $vars["backGroundColor"];

?>
<section class="uk-section" style="background-color: <?= $backGroundColor ?>;">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?= $page->flyer_by_size_block->title ?>
            </h3>
            <p class="subtitle">
                <?= $page->flyer_by_size_block->description ?>
            </p>
        </div>
        <!--chỉ 35 kích thước-->
        <div class="tw-element uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($flyerBySizes as $item) {
                $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
            ?>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageUrl ?>" alt="<?= $item->title ?>" />
                        <h4>
                            <?= $item->title ?>
                        </h4>
                        <!-- CK Têxt-->
                        <?= $item->product_front_intro_text ?>

                        <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>