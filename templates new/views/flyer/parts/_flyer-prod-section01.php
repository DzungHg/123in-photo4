<?php namespace ProcessWire;


?>

<section class="uk-section uk-section-shop">
        <div class="uk-container">
            <div class="uk-child-width-1-2@l uk-child-width-1-2@m" data-uk-grid>
                <div>
                    <?php
                        $thumbImageStr = '';
                        $bigImageStr = ''; 
                        $imageLinkThumb = '';
                        $imageLinkBig = '';
                        $imageAltText = '';
                  
                        foreach($page->product_repeaters as $item) {
                            if($item->type == 'product_slides') {
                                
                                $imageAltText = $item->product_slide_details->image_alt_text;

                                $imageLinkThumb = getImageUrlFromImages(page()->product_images, $item->product_slide_details->thumb_image_name);
                                $thumbImageStr .= "<img src='$imageLinkThumb' alt='$imageAltText'>\n";
                                //Làm tiếp hình lớn
                               
                                $imageLinkBig = getImageUrlFromImages($page->product_images, $item->product_slide_details->big_image_name);
                                $bigImageStr .= "<img src='$imageLinkBig' alt='$imageAltText'>\n";
                                    
                            }
                            
                        }
                    ?>
                    <div class="uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-single image-slide-area">
                            <div class="thumbs owl-carousel owl-theme">
                                <!--dãy hình ở đây -->                            
                                <?=$thumbImageStr?>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-margin-left big-images onhover owl-carousel owl-theme">
                                <!--dãy hình ở đây -->
                                <?=$bigImageStr?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-area">

                    <article class="single shop">
                        <div class="entry-shop uk-margin-medium-bottom">
                            <h1 class="shop-title uk-margin-bottom"><?=$page->title?></h1>
                            <h4><?=page()->product_front_intro->sub_title?></h4>
                            <!-- review sao ở đây chưa bỏ vô -->
                            <div class="shop-price"><?=page()->product_front_intro->price_intro?></div>
                            <?=page()->body?>
                            <!--<input class="uk-input shop-input" type="number" placeholder="1"> -->
                            <a href="<?=$page->product_lead_to_link?>" target="<?=page()->product_front_intro->leard_to_target?>" class="uk-button uk-button-default uk-margin-left tw-hover" style="border-color: transparent; background: #151515; color: #fff;"><span class="tw-hover-inner"><span><?=page()->product_front_intro->lead_to_button_caption?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
                        </div>
                        <hr>
                       <!-- đã bỏ đi một số-->
                    </article>

                </div>
            </div>
        </div>
    </section>