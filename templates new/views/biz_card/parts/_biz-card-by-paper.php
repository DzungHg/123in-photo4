<?php namespace ProcessWire;
    //Tìm pages()->find("template=biz_card-product|flyer-product, popular_item=1, sticky_to_front=1, limit=4");
    $paperCate = pages()->get("template=biz_card-category, code_num=1"); //'1 là giấy danh mục ở đây: /suu-tap-danh-muc-san-pham/phan-loai-danh-thiep/
    $cardByPapers = pages()->get("/danh-thiep/")->children("biz_card_categories=$paperCate");
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->biz_card_by_paper_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->biz_card_by_paper_block->description?>
            </p>
        </div>
        <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($cardByPapers as $item)
            {
                $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
                ?>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?=$imageUrl?>" alt="<?=$item->title?>" />
                        <h4>
                        <?=$item->title?>
                        </h4>
                        
                            <?=$item->product_front_intro_text?>
                        
                        <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
            </div>

                <?php
            }
            ?>
            
        </div>
    </div>
</section>