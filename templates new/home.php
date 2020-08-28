<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <!-- home slider END -->
    <?php echo files()->render('views/home-parts/_home-slider.php') ?>
    <!-- home slider END -->

    <!-- phần tuyên bố dịch vụ và lãnh vực  -->
    <?php echo files()->render('views/home-parts/_home-serv-biz-segments.php') ?>


    <!-- các sản phẩm tiêu biểu -->
    <?php echo files()->render('views/home-parts/_home-popular-products.php') ?>
    <!-- các sản phẩm tiêu biểu END -->

    <!-- Dịch vụ doanh nghiệp 123in -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->home_serivce_block->title ?>
                </h3>
                <div class="subtitle">
                    <?= $page->home_serivce_block->description ?>
                </div>
            </div>
            <!--biz-serivice -->
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" uk-grid>
                <?php echo include("views/home-parts/_home-biz-serv-statements.php"); ?>
            </div>
            <div class="tw-element tw-heading uk-text-center">
                <a href="<?= $page->home_url_to_service_page ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $page->home_serivce_block->button_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>
    </section>
    <!-- Dịch vụ doanh nghiệp từ 123in END -->

    <!-- phần testi -->
    <?php echo files()->render('views/home-parts/_home-section-testi.php') ?>
    <!--phần testi END -->



</pw-region>