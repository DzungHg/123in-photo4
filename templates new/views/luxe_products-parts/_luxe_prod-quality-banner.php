<?php

namespace ProcessWire;

$imageUrl = $vars['imageUrl'];
$bgColor = $vars['bgColor']; // style="background-color: #f7f7f7;"
$textStr = $vars['text']; //làm nội dung nổi
?>

<section class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-grid-match uk-grid-collapse" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 400;">

            <div class="uk-padding-xlarge uk-light uk-background-cover" style="background-image: url(<?= $imageUrl ?>);min-height: 400px;">
            </div>

            <div class="uk-padding-xlarge">

                <div class="tw-element tw-box">
                    <!--nội dung-->
                    <?= $textStr ?>
                </div>

            </div>

        </div>


    </div>
</section>