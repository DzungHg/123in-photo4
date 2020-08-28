<?php

namespace ProcessWire;

?>
<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?= $page->luxe_prod_color_block->title ?>
    </h3>
    <p class="subtitle">
        <?= $page->luxe_prod_color_block->description ?>
    </p>
</div>
<!-- 2 card tính năng ở đây-->
<div class="tw-element uk-child-width-1-2 uk-child-width-1-4@m uk-child-width-1-4@s uk-grid-match" uk-grid>
    <?php

    foreach ($page->product_repeaters as $item) {
        if ($item->type == "luxe_color") {

    ?>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $item->images->first->url ?>" alt="<?= $item->title_line ?>">
                    <p><?= $item->title_line ?></p>
                </div>
            </div>
    <?php
        }
    } ?>
</div>