<?php namespace ProcessWire;
    //Tìm pages()->find("template=biz_card-product|flyer-product, popular_item=1, sticky_to_front=1, limit=4");
    $category = pages()->get("template=notebook-category, code_num=1"); //'1 là giấy danh mục ở đây: /suu-tap-danh-muc-san-pham/phan-loai-danh-thiep/
    $notebooks = pages()->get("template=notebook-type")->children("notebook_categories=$category");
?>

        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->notebook_by_it_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->notebook_by_it_block->description?>
            </p>
        </div>
        <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($notebooks as $item)
            {
                $imageUrl = getImageUrlFromImages($item->images, $item->product_front_intro->image_intro_name);
                ?>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?=$imageUrl?>" alt="<?=$item->title?>" />
                        <h4>
                        <?=$item->title?>
                        </h4>
                        
                            <?=$item->product_front_intro_text?>
                        
                        <a href="<?=$item->url?>">Xem <?=$item->title?></a>
                    </div>
            </div>

                <?php
            }
            ?>
            
        </div>
