<?php namespace ProcessWire;
    
   

?>
<!-- 2 thẻ giấy tại đay -->

<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?=$page->notecard_design_intro_block->title?>
    </h3>
    <p class="subtitle">
        <?=$page->notecard_design_intro_block->description?>
    </p>
</div>
<div class="tw-element uk-child-width-expand@m uk-grid-match" uk-grid >
    <?php
    
    $imageLink = '';
    foreach ($page->notecard_repeaters as $item)
    {
        if ($item->type =="design_template_item")
        {
            $imageLink = getImageUrlFromImages($page->images, $item->image_name);
            ?>
            <div>
                <div class="tw-element tw-box">
                    <a href="<?= $item->url_link ?>"><img src="<?= $imageLink ?>" alt="<?= $item->title_line ?>"></a>
                    <p><a href="<?= $item->url_link ?>"><?= $item->caption_text ?></a></p>
                </div>
            </div>
    <?php
        }
    } ?>
</div>
<!-- nút bấm qua thiết kế-->
<div class="tw-element tw-heading uk-text-center">
    <a href="<?= $page->notecard_design_intro_block->url_link ?>" target = "<?=$page->notecard_design_intro_block->url_target_attr?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $page->notecard_design_intro_block->url_link_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
</div>
