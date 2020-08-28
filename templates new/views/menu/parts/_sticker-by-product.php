<?php namespace ProcessWire;
    //Tìm pages()->find("template=biz_card-product|flyer-product, popular_item=1, sticky_to_front=1, limit=4");
    
    $allStickers = pages()->get("/nhan-dan/")->children();
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->sticker_prod_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->sticker_prod_block->description?>
            </p>
        </div>
        <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($allStickers  as $item)
            {
                $imageUrl = getImageUrlFromImages($item->images, $item->product_front_intro->image_intro_name);
                ?>
                <div>
                <div class="tw-element tw-box">
                    <img src="<?=$imageUrl?>" alt="<?=$item->title?>" />
                    <h4>
                    <?=$item->title?>
                    </h4>
                    <p class="description">
                        <?=$item->front_intro_text?>
                    </p>
                    <a href="<?=$item->url?>"><?=$item->product_front_intro->link_caption_to?></a>
                </div>
            </div>

                <?php
            }
            ?>
            
        </div>
    </div>
</section>