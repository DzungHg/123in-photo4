<?php namespace ProcessWire;
    $envCate = pages()->get("template=envelope-category, code_num=2"); //'1 khổ nhỏ, 2 khổ trung, 3 khổ khác
    $envByCate = pages()->get("/bao-thu/")->children("envelope_categories=$envCate");
?>

        <div class="tw-element uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($envByCate  as $item)
            {
                $imageUrl = getImageUrlFromImages($item->images, $item->teasing_image_name);
                ?>
                <div>
                <div class="tw-element tw-box">
                    <img src="<?=$imageUrl?>" alt="<?=$item->title?>" />
                    <h4> <?=$item->title?></h4>
                        
                    <?=$item->product_front_intro_text //ck text?>
                   
                    <a href="<?= $item->url ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>

                </div>
            </div>

                <?php
            }
            ?>
            
        </div>