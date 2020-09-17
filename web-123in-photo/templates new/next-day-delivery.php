<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->
<!-- giới thiệu men u-->
<section class="uk-section uk-section-shop">
    <div class="uk-container">
    <?php 
    $imageLink = '';
    $imageLink = getImageUrlFromImages($page->images, $page->title_image_name); 
     ?>
        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid >
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?=$imageLink?>" alt="Hình tiêu đề" uk-cover>
                <canvas width="500" height="320"></canvas>                            
            </div>
            <div class="uk-card-body">                        
                <?=$page->body?>                       
            </div>    
                              
        </div>
    </div>
    
</section>

<!-- 4 sản điểm nhấn của giấy -->
<section class="uk-section" style="background-color: #f7f7f7;">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->next_day_deli_prod_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->next_day_deli_prod_block->description?>
            </p>
        </div>
        <!-- 4 card tính năng ở đây-->
        <div class="tw-element uk-child-width-expand@m uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php echo files()->render('views/next_day_deli-parts/_next_d_deli-items.php');?>            
        </div>
    </div>
</section>


</pw-region>