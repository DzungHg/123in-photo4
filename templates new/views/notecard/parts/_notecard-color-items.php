<?php

namespace ProcessWire;

?>
<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?= $page->notecard_color_block->title ?>
    </h3>
    <p class="subtitle">
        <?= $page->notecard_color_block->description ?>
    </p>
</div>
<!-- 2 card tính năng ở đây-->
<div class="tw-element uk-child-width-1-2 uk-child-width-1-4@m uk-child-width-1-4@s uk-grid-match" uk-grid>
    <?php

    $imageLink = '';
    foreach ($page->notecard_repeaters as $item) {
        if ($item->type == "color_item") {
            $imageLink = getImageUrlFromImages($page->images, $item->image_name);
    ?>
            <div>
                <div class="tw-element tw-box">
                    <a href="<?= $item->url_link ?>"><img src="<?= $imageLink ?>" alt="<?= $item->title_line ?>"></a>
                    <p><a href="<?= $item->url_link ?>"><?= $item->title_line ?></a></p>
                </div>
            </div>
    <?php
        }
    } ?>
</div>