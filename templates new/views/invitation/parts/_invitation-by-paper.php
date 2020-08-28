<?php

namespace ProcessWire;

?>

<!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
<div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
    <?php
    $imageUrl = '';
    foreach ($page->postcard_repeaters as $item) {
        if ($item->type == 'paper_intros') {
            $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
    ?>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageUrl ?>" alt="<?= $item->title_line ?>" />
                    <h4><?= $item->title_line ?></h4>

                    <?= $item->description_ck ?>

                    <a href="<?= $item->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $item->caption_text ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                </div>
            </div>

    <?php
        }
    }
    ?>

</div>