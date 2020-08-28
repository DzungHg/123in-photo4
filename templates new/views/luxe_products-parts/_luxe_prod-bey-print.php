<?php

namespace ProcessWire;

$imageUrl = getImageUrlFromImages($page->images, $page->title_image_name);

?>


<div class="uk-child-width-1-2@s uk-grid-match uk-grid-collapse" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 400;">

    <div class="uk-padding-xlarge">

        <div class="tw-element tw-box">
            <!--nội dung-->
            <?= $page->body ?>
        </div>

    </div>

    <div class="uk-padding-xlarge uk-light uk-background-cover" style="background-image: url(<?= $imageUrl ?>);min-height: 400px;">
    </div>

</div>