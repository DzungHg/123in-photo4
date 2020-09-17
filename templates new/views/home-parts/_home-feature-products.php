<?php namespace ProcessWire;

$featureProducts = pages()->find("template=product, product_featured=1");
$imageLink = "";
?>
<section class="uk-section">
    <div class="uk-container">
    <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            foreach ($page->page_repeaters as $item) {
                if ($item->type == 'home_4_statements') {
            ?>
                    <div>
                        <div class="tw-element tw-box">
                            <i class="<?= $item->icon_name ?>"></i>
                            <h4><?= $item->title ?></h4>
                            <p class="description">
                                <?= $item->description_area ?>
                            </p>
                            <a href="<?= $item->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Chi tiết</span><i class="ion-ios-arrow-thin-right"></i></span></a>

                        </div>
                    </div>
                    
            <?php
                }
            }
            ?>
        </div>
        
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->home_feature_prod_block->title?>
            </h3>
            <p><?=$page->home_feature_prod_block->description?></p>
        </div>
        <div class="tw-element tw-carousel-shop">
            <div class="owl-carousel owl-theme" data-uk-scrollspy="target:.shop-item; cls:uk-animation-slide-bottom-medium; delay: 350;">
            <?php foreach ($featureProducts as $item) {
                $imageLink = getImageUrlFromImages($item->images, $item->product_feature_image_name);  
            ?>
                
                <div class="shop-item">
                    <div class="shop-content">
                        <div class="shop-image-container uk-inline visible">
                            <img alt="<?=$item->title?>" src="<?=$imageLink?>">
                        </div>
                        <h4><a href="<?=$item->url?>" class="shop-title"><?=$item->title?></a></h4>
                        <a class="shop-category"><?=$item->parent->title?></a>
                    
                    </div>
                </div>
                <?php
            }
            ?> 

            </div>
        </div>
    </div>
</section>