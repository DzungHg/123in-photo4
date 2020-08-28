<?php

namespace ProcessWire;

?>

<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->


    <!-- service statments (section màu trắng) -->

    <?php echo include("views/biz_services-parts/_service-statement-items.php"); ?>

    <!-- service statments END -->

    <!-- service công ty cụ thể (section uk-section-muted hoặc màu) -->

    <?php echo include("views/biz_services-parts/_service-comp-items.php"); ?>

    <!-- service công ty cụ thể END -->

    <!-- 4 loại sản phẩm -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->biz_services_irr_prod_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->biz_services_irr_prod_block->description ?>
                </p>
            </div>
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 300;">
                <?php
                $imageUrl = '';
                foreach ($page->biz_services_repeaters_m as $item) {
                    if ($item->type == "4_product_type") {
                        $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                ?>
                        <div>
                            <div class="tw-element tw-box">
                                <img src="<?= $imageUrl ?>" alt="<?= $item->title_line ?>" />
                                <h4><?= $item->title_line ?></h4>
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
                <a href="<?php echo '#' . $page->biz_services_contact_block->anchor; ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Liên hệ</span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>
        
        <!-- 4 loại sản phẩm HẾT -->


        <!-- service contact section đã ở trong-->
        <section class="uk-section" style="background-color: #f7f7f7;">
            <div class="uk-container uk-container-xsmall">
                <div class="tw-heading tw-element uk-text-center">
                    <h3 id="<?= $page->biz_services_contact_block->anchor ?>"><?= $page->biz_services_contact_block->title ?></h3>
                    <p><?= $page->biz_services_contact_block->description ?></p>
                </div>
                <!--form liên hệ theo theme default -->
                <?php echo $forms->embed('lien-he-account-manager'); ?>
            </div>
        </section>
        <!-- service contact END -->

</pw-region>