<?php namespace ProcessWire;
    $imageUrl01 = '';
    $imageUrl02 = '';
    $imageUrl01 = getImageUrlFromImages($page->images, $page->letterhead_papers->image_name_01);
    $imageUrl02 = getImageUrlFromImages($page->images, $page->letterhead_papers->image_name_02);

?>
<!-- 2 thẻ giấy tại đay -->
<div>
    <div class="uk-card uk-grid-collapse uk-child-width-1-2@s" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="<?=$imageUrl01?>" alt="<?=$page->letterhead_papers->title_01?>" uk-cover>                            
        </div>
        <div class="uk-card-body tw-element tw-box">
            <h4><?=$page->letterhead_papers->title_01?></h4> 
            <p>                      
                <?=$page->letterhead_papers->description_01?>
            </p>
            <a href="<?= $page->letterhead_papers->url_link_01 ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem Chi Tiết</span><i class="ion-ios-arrow-thin-right"></i></span></a>
        </div>                        
    </div>
</div>
<div>
    <div class="uk-card uk-grid-collapse uk-child-width-1-2@s" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="<?=$imageUrl02?>" alt="<?=$page->letterhead_papers->title_02?>" uk-cover>                            
        </div>
        <div class="uk-card-body tw-element tw-box">
            <h4><?=$page->letterhead_papers->title_02?></h4> 
            <p>                      
                <?=$page->letterhead_papers->description_02?>
            </p>
            <a href="<?= $page->letterhead_papers->url_link_02 ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem Chi Tiết</span><i class="ion-ios-arrow-thin-right"></i></span></a>
        </div>                        
    </div>
</div>

