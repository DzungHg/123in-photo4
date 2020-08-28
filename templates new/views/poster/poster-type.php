<?php namespace ProcessWire;
//lấy dữ liệu từ tờ rơi
$pageFlyerType = pages("/to-roi");
//
$imageUrl = '';

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- nội dung trang thay đổi -->
<section class="uk-section uk-section-shop">
    <div class="uk-container">
    <?php 
    $imageLink = '';
    $imageLink = getImageUrlFromImages($page->images, $page->title_image_name); 
     ?>
        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?=$imageLink?>" alt="Hình tiêu đề" uk-cover>
                <canvas width="500" height="320"></canvas>                            
            </div>
            <div class="uk-card-body">                        
                <?=$page->body?>
                <div>
                <a class="uk-button uk-button-default" href="<?=$page->productt_show_out_fields->url_link?>" target="<?=$page->productt_show_out_fields->target_text?>"><?=$page->productt_show_out_fields->url_link_caption?></a>      
                </div>          
            </div>    
                              
        </div>
    </div>
    
</section>
<!-- 3 tính năng của giấy -->
<section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $pageFlyerType->flyer_3_paper_characters_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $pageFlyerType->flyer_3_paper_characters_block->description ?>
                </p>
            </div>
            <!-- 3 tính năng của giấy-->
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php 
                
                foreach ($page->flyer_repeaters_m as $item)
                {
                    if ($item->type == "3_paper_type_feature")
                    {
                    $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                    ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>" alt="<?=$item->product_paper_name?>" />
                            <h4><?=$item->title_line?></h4>
                            <!-- CK Têxt-->
                            <?=$item->description_ck?>
                            
                        </div>
                    </div>

                <?php 
                }
            }
             ?>    
            </div>
        </div>
    </section>
    <!-- 3 tính năng của giấy HẾT -->
</pw-region>