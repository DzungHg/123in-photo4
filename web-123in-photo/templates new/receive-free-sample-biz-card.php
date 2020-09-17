<?php namespace ProcessWire;
    $imageLink01 = getImageUrlFromImages($page->images, $page->receive_fr_sp_4_images->image_name_01);
    $imageLink02 = getImageUrlFromImages($page->images, $page->receive_fr_sp_4_images->image_name_02);
    $imageLink03 = getImageUrlFromImages($page->images, $page->receive_fr_sp_4_images->image_name_03);
    $imageLink04 = getImageUrlFromImages($page->images, $page->receive_fr_sp_4_images->image_name_04);
?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-1 uk-child-width-expand@m" uk-grid>
                <div class="tw-element tw-box">
                    <img src="<?=$imageLink01?>">
                </div>
                    
                <div class="tw-element tw-box">
                    <h4><?=$page->title_line?></h4>
                    <div class="uk-child-width-expand@m" uk-grid>
                        <div>
                            <div class="uk-child-width-expand" uk-grid>
                                <div class="uk-inline">
                                    <img src="<?=$imageLink02?>">
                                </div>
                                <div class="uk-inline">
                                    <img src="<?=$imageLink03?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="<?=$imageLink04?>">
                        </div>
                    </div>
                    <?=$page->body?>
                    <!--nút bấm-->
                    <div class="tw-heading uk-text-center">
                        <a href="<?php echo '#' . $page->receive_fr_sample_form_block->anchor; ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Tôi nhận</span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-xsmall">
            <div id="<?=$page->receive_fr_sample_form_block->anchor?>" class="tw-heading tw-element uk-text-center">
                <h3><?= $page->receive_fr_sample_form_block->title ?></h3>
                <p><?= $page->receive_fr_sample_form_block->description ?></p>
            </div>
            <!--form liên hệ theo default -->
            <?php echo $forms->embed('nhan-mau-danh-thiep'); ?>
        </div>
    </section>
</pw-region>
<!-- bỏ form nhận mẫu ở đay -->
<section id="order-sample"></section>