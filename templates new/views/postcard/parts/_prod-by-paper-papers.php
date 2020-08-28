<?php

namespace ProcessWire;


?>

<div class="tw-element tw-heading uk-text-center">
    <h3>
        <?= $page->flyer_3_paper_characters_block->title ?>
    </h3>
    <p class="subtitle">
        <?= $page->flyer_3_paper_characters_block->description ?>
    </p>
</div>
<!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
<div class="tw-element uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-expand@m uk-grid-match" data-uk-grid>
    <?php
    $imageUrl = '';
    foreach (page()->postcard_repeaters as $item) {
        if ($item->type == 'paper_intros') {
            $imageUrl = getImageUrlFromImages(page()->images, $item->image_name);
    ?>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageUrl ?>" alt="<?= $item->title_line ?>" />
                    <h4>
                        <?= $item->title_line ?>
                    </h4>

                    <?= $item->description_ck ?>

                </div>
            </div>

        <?php } ?>
    <?php } ?>

</div>