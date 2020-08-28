<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- giới thiệu menu -->

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

</pw-region>