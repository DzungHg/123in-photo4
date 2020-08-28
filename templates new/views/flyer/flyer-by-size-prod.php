<?php

namespace ProcessWire;
$pageFlyerType = pages("/to-roi");
$imageUrl = '';

?>
<pw-region id="page-content">
    <!-- head image and cubersome END cần thêm thông số-->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- 3 tính năng của giấy -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $pageFlyerType->flyer_3_paper_characters_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $pageFlyerType->flyer_3_paper_characters_block->description ?>
                </p>
            </div>
            <!-- 3 tính năng của giấy-->
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php 
                
                foreach ($page->flyer_repeaters_m as $item)
                {
                    if ($item->type == "3_paper_type_feature")
                    {
                    $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                    ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>" alt="<?=$item->product_paper_name?>" />
                            <h4><?=$item->title_line?></h4>
                            <!-- CK Têxt-->
                            <?=$item->description_ck?>
                            
                            <a href="<?= $item->url_link?>" target="<?=$item->a_tag_attr_target?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?=$item->caption_text?></span><i class="ion-ios-arrow-thin-right"></i></span></a>

                        </div>
                    </div>

                <?php 
                }
            }
             ?>    
            </div>
        </div>
    </section>
    <!-- 3 tính năng của giấy HẾT -->
    <!--phần hình giữa -->
    <?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515']); ?>
</pw-region>