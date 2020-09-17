<?php namespace ProcessWire;

    $imageLink = '';
    $clsPartStr = '';
?>
<section class="uk-section" style="background-color: #f7f7f7;">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->biz_services_comp_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->biz_services_comp_block->description ?>
                </p>
            </div>
            <!--2 phần chi tiết dùng repeater-->
            <div class="tw-element tw-portfolio promo">
            <?php
                foreach ($page->biz_services_repeaters_m as $item) {
                    if ($item->type == '2_biz_service') {
                        if (trim($item->class_text) == 'left') {
                            $clsPartStr = "uk-card-media-" . trim($item->class_text);
                        } else {
                            $clsPartStr = "uk-flex-last@s uk-card-media-" . trim($item->class_text);
                        }

                        $imageLink = getImageUrlFromImages($page->images, $item->image_name)
                ?>

                        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="<?= $clsPartStr ?> uk-cover-container">
                                <img src="<?= $imageLink ?>" alt="<?= $item->image_alt_text ?>" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div class="uk-card-body">
                                <?= $item->description_ck ?>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
            <!--nút bấm-->
            <div class="tw-element tw-heading uk-text-center">
                <a href="<?php echo '#'.$page->biz_services_contact_block->anchor; ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Liên hệ</span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>
    </section>
