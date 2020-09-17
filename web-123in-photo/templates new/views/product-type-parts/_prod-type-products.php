<?php

namespace ProcessWire;
//Tìm sản phẩm poplular 4 cái nhưng không được sticky to font vì nó đã trưng ra rồi.
$popProducts = $page->children();
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?= $page->prod_type_product_block->title ?>
            </h3>
            <p class="subtitle">
                <?= $page->prod_type_product_block->description ?>
            </p>
        </div>
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($popProducts as $item) {
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