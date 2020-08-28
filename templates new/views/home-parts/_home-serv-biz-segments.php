<?php

namespace ProcessWire;
//product type listed at home page
$listItems = pages()->find("sticky_to_home_page=1, limit=4, sort=sticky_to_home_page_order");
?>
<section class="uk-section">
    <!-- phần tuyên bố dịch vụ -->
    <div class="uk-container">
        <div class="tw-element uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            foreach ($page->page_repeaters as $item) {
                if ($item->type == 'home_4_statements') {
            ?>
                    <div>
                        <div class="tw-element tw-box uk-text-center">
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
    </div>
    <!-- phần tuyên bố dịch vụ HẾT -->

    <!-- phần lãnh vực -->
    <div class="uk-container">
        <!-- phần chêm -->
        <div class="tw-element tw-heading uk-text-center">
        </div>
        <!-- phần chêm HẾT -->

        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
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
    <!-- phần lãnh vực HẾT  -->
</section>