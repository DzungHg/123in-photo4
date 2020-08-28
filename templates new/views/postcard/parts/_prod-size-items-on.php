<?php

namespace ProcessWire;

?>

<?php
$imageUrl = '';
foreach ($page->postcard_repeaters as $item) {
    if ($item->type == '5_size_intros') {
        $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
?>
        <div>
            <div class="tw-element tw-box">
                <img src="<?= $imageUrl ?>" alt="<?= $item->title_line ?>" />
                <h4><?= $item->title_line ?></h4>
                <?= $item->description_ck ?>

                <a href="<?= $item->url_link ?>" target="<?= $item->a_tag_attr_target ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner">
                        <span></span><?= $item->caption_text ?></span> <i class="ion-ios-arrow-thin-right"></i>
                    </span></a>

            </div>
        </div>

<?php
    }
}
?>