<?php

namespace ProcessWire;

?>
<section class="uk-section">
    <!-- phần tuyên bố dịch vụ -->
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
            <?=$page->home_4_statements_block->title?>
            </h3>
            <p class="subtitle">
            <?=$page->home_4_statements_block->description?>
            </p>
        </div>
        
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
    </div>
    <!-- phần tuyên bố dịch vụ HẾT -->
</section>