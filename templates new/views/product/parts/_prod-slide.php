<?php

namespace ProcessWire;


?>

<section class="uk-section uk-section-shop">
    <div class="uk-container">
        <div class="uk-child-width-1-1@l uk-child-width-1-1@m" data-uk-grid>
            <div class="content-area">
                <article class="single shop">
                    <div class="entry-shop uk-margin-medium-bottom">
                        <h1 class="shop-title uk-margin-bottom"><?= $page->title ?></h1>
                        <?= $page->body ?>
                    </div>
                </article>
            </div>

            <div>
                <?php
                $thumbImageStr = '';
                $bigImageStr = '';
                $imageLinkThumb = '';
                $imageLinkBig = '';
                $imageAltText = '';

                foreach ($page->product_repeaters as $item) {
                    if ($item->type == 'product_slides') {

                        $imageAltText = $item->product_slide_details->image_alt_text;

                        $imageLinkThumb = getImageUrlFromImages(page()->product_slide_images, $item->product_slide_details->thumb_image_name);
                        $thumbImageStr .= "<img src='$imageLinkThumb' alt='$imageAltText'>\n";
                        //Làm tiếp hình lớn

                        $imageLinkBig = getImageUrlFromImages($page->product_slide_images, $item->product_slide_details->big_image_name);
                        $bigImageStr .= "<img src='$imageLinkBig' alt='$imageAltText'>\n";
                    }
                }
                ?>
                <div class="uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-single image-slide-area">
                        <div class="thumbs owl-carousel owl-theme">
                            <!--dãy hình ở đây -->
                            <?= $thumbImageStr ?>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="uk-margin-left big-images onhover owl-carousel owl-theme">
                            <!--dãy hình ở đây -->
                            <?= $bigImageStr ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>