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
        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?=$imageLink?>" alt="Hình tiêu đề" uk-cover>
                <canvas width="500" height="320"></canvas>                            
            </div>
            <div class="uk-card-body">                        
                <?=$page->body?>
                <div>
                <a class="uk-button uk-button-default" href="<?=$page->url_link?>" target="_blank"><?=$page->caption_text?></a>      
                </div>                         
            </div>    
                              
        </div>
    </div>
    
</section>

<!-- giấy -->
<section class="uk-section" style="background-color: #f7f7f7;">
    <div class="uk-container">
        <!-- 2 loại giấy -->
        <div class="tw-element uk-child-width-expand@m uk-grid-match" uk-grid >
            <?php echo files()->include('views/letterhead/parts/_letterhead-papers.php');?>            
        </div>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <?php files()->include('views/letterhead/parts/_letterhead-features.php');?>  
    </div>
</section>

</pw-region>