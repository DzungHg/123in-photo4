<?php

namespace ProcessWire;


?>

<?php
$imageLink = '';
$imageLink = getImageUrlFromImages($page->images, $page->title_image_name);
?>
<div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="<?= $imageLink ?>" alt="Hình tiêu đề" uk-cover>
        <canvas width="585" height="400"></canvas>
    </div>
    <div class="uk-card-body">
        <p class="uk-card-title">
            <?= $page->postcard_head_title ?>
        </p>
        <?= $page->body ?>
    </div>

</div>
</div>