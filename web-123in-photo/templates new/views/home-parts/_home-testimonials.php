<?php

namespace ProcessWire;

$testiPage = pages()->get("/123in-photo/khach-hang-noi-ve-123in/");
?>

<section class="tw-carousel uk-section-muted">
    <div class="owl-carousel owl-theme">
        <?php
        foreach ($testiPage->page_repeaters as $item) {
            if ($item->type == 'testimonials') {
                $imageLink = getImageUrlFromImages($testiPage->images, $item->image_name);
        ?>
                <div class="carousel-item">
                    <section class="uk-section uk-padding-remove uk-background-muted">
                        <div class="uk-container">
                            <div class="uk-child-width-expand" data-uk-grid>
                                <div>
                                    <div class="tw-carousel-testimonial uk-section-large">
                                        <div class="testimonial-item">
                                            <h3 class="testimonial-title">Khác hàng đã nói</h3>
                                            <div class="testimonial-content">
                                                <p>
                                                    <?= $item->textarea ?>
                                                </p>
                                            </div>
                                            <div class="testimonial-author">
                                                <span><a href=""><?= $item->title ?></a> / <?= $item->title_line ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-auto uk-visible@m testimonial-image">
                                    <img src="<?= $imageLink ?>" />
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

        <?php
            }
        }
        ?>

    </div>
</section>