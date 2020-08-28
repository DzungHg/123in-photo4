<?php

namespace ProcessWire;

$testiPage = pages()->get("/123in/khach-hang-noi-ve-123in/");
?>
<section class="uk-section uk-section-large uk-padding-remove-top" style="background-color: #f7f7f7;">
    <div class="uk-container">

        <div class="tw-carousel-testimonials">
            <div class="owl-carousel owl-theme" data-uk-scrollspy="target:.testimonial-item; cls:uk-animation-slide-bottom-medium; delay: 350;">
                <?php
                foreach ($testiPage->page_repeaters as $item) {
                    if ($item->type == 'testimonials') {
                        $imageLink = getImageUrlFromImages($testiPage->images, $item->image_name);
                ?>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>
                                    <?= $item->textarea ?>
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <img src="<?= $imageLink ?>" class="uk-border-circle" />
                                <span><a href=""><?= $item->title ?></a> / <?= $item->title_line ?></span>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>


            </div>
        </div>

    </div>
</section>