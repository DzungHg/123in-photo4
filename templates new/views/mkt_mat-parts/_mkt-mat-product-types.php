<?php

namespace ProcessWire;
//Tìm các trang được gắn là marketing, tìm theo Id ngành
$thisPageId = page()->id;
$listItems = pages()->find("by_biz_usages.id=$thisPageId, limit=6");

?>
<section class="uk-section">
    <div class="uk-container">
        <!-- Liệt kê các sản phẩm-->
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?= $page->mkt_mat_block->title ?>
            </h3>
            <p class="subtitle">
                <?= $page->mkt_mat_block->description ?>
            </p>
        </div>
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
            <?php

            $imageLink = '';
            foreach ($listItems as $item) {

                $imageLink = getImageUrlFromImages($item->images, $item->teasing_image_name)
            ?>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?= $imageLink ?>" alt="<?= $item->title ?>" title="<?= $item->title ?>" />
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