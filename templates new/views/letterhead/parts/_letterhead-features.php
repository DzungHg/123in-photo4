<?php namespace ProcessWire;
    $imageUrl01 = '';
    $imageUrl02 = '';
    $imageUrl03 = '';
    $imageUrl04 = '';

    $imageUrl01 = getImageUrlFromImages($page->images, $page->letterhead_features->image_name_01);
    $imageUrl02 = getImageUrlFromImages($page->images, $page->letterhead_features->image_name_02);
    $imageUrl03 = getImageUrlFromImages($page->images, $page->letterhead_features->image_name_03);
    $imageUrl04 = getImageUrlFromImages($page->images, $page->letterhead_features->image_name_04);

?>
 <div class="isotope-container uk-grid-medium uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m" data-uk-grid  >
    <div class="uk-width-expand">
        <div class="uk-card">
            <div class="uk-card-media-top uk-cover-container">
                    <img src="<?=$imageUrl01?>" alt="Hình 01">
            </div>
            <div class="uk-card-body">
                <h4 class="uk-card-title"><?=$page->letterhead_features->title_01?></h4>
                <p><?=$page->letterhead_features->description_01?></p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-child-width-1-1 uk-grid-divider uk-grid-collapse" uk-grid>
        <div>
            <div class="uk-card uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="<?=$imageUrl02?>" alt="Hình 02">
                </div>
                <div class="uk-card-body">
                    <p><b><?=$page->letterhead_features->title_02?></b></p>
                    <p><?=$page->letterhead_features->description_02?></p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                        <img src="<?=$imageUrl03?>" alt="Hình 03">
                </div>
                <div class="uk-card-body">
                    <p><b><?=$page->letterhead_features->title_03?></b></p>
                    <p><?=$page->letterhead_features->description_03?></p>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-grid-collapse uk-child-width-1-2@s" uk-grid>
                <div class=" uk-flex-last@s uk-card-media-right uk-cover-container">
                    <img src="<?=$imageUrl04?>" alt="Hình 04">
                </div>
                <div class="uk-card-body">
                    <p><b><?=$page->letterhead_features->title_04?></b></p>
                    <p><?=$page->letterhead_features->description_04?></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- bật nút đặt hàng-->
<div class="uk-text-center">
    <a class="uk-button uk-button-default" href="<?=$page->productt_show_out_fields->url_link?>" target="<?=$page->productt_show_out_fields->target_text?>" ><?=$page->productt_show_out_fields->url_link_caption?></a>
</div>