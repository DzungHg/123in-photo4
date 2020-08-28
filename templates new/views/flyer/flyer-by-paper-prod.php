<?php

namespace ProcessWire;
$imageUrl = '';
$pageFlyerType = pages("/to-roi");
?>
<pw-region id="page-content">
    <!-- head image and cubersome END cần thêm thông số-->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- 3 điểm nhấn của giấy -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->flyer_3_paper_characters_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->flyer_3_paper_characters_block->description ?>
                </p>
            </div>
            <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-expand@m uk-grid-match" data-uk-grid>
                <?php
                
                foreach ($page->flyer_repeaters_m as $item) {
                    if ($item->type == '3_paper_type_feature') {
                        $imageUrl = '';
                        $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                ?>
                        <div>
                            <div class="tw-element tw-box">
                                <img src="<?= $imageUrl ?>" alt="<?= $item->title_line ?>" />
                                <h4><?= $item->title_line ?></h4>
                               
                                <?= $item->description_ck ?>

                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </section>

    <!-- by size -->
    <section class="uk-section" style="background-color: #f7f7f7;">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $pageFlyerType->flyer_size_intro_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $pageFlyerType->flyer_size_intro_block->description ?>
                </p>
            </div>
            <!--chỉ 5 kích thước-->
            <div class="tw-element uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
                
            <?php 
                
                foreach ($page->flyer_repeaters_m as $item)
                {
                    if ($item->type =="5_size_intro")
                    {
                    $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                    ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>" alt="<?=$item->title_line?>" />
                            <h4> <?=$item->title_line?></h4>
                            <!-- CK Têxt-->
                            <?=$item->description_ck?>
                            <a href="<?= $item->url_link?>" target="<?=$$item->a_tag_attr_target?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?=$item->caption_text?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                    </div>

                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--phần hình banner giữa -->
    <?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515']); ?>
</pw-region>