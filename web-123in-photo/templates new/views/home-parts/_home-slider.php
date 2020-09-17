<?php namespace ProcessWire;

?>
<section class="tw-slider uk-light">    
        <div class="owl-carousel owl-theme">
        <?php
            $imageLink = '';
            foreach ($page->page_repeaters as $item)
            {
                if ($item->type == 'home_slides')
                {
                    $imageLink = getImageUrlFromImages($page->slide_images, $item->image_name);                    
            ?>

            <div class="slider-item" data-uk-parallax="bgy: -200" data-overlay="0.4" style="background-color: #151515; background-image: url(<?=$imageLink?>);">
                <div class="slider-content">
                    <div class="tw-element uk-text-center tw-heading full" data-uk-scrollspy="target: > *; cls:uk-animation-slide-bottom-medium; delay: 400;">
                        <h4 class="tw-sub-title"><?=$item->title_line?></h4>
                        <h1><?=$item->title?></h1>
                        <a href="<?=$item->url_link?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?=$item->caption_text?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
           
        </div>
    </section>