<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->
<!-- giới thiệu men u-->
<section class="uk-section">
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
            </div>    
                              
        </div>
    </div>
    
</section>

<!-- Màu sắc  -->
<section class="uk-section uk-section-muted">
    <div class="uk-container">
        
         <?php echo files()->include('views/notecard/parts/_notecard-color-items.php');?>            
        
    </div>
</section>
<!-- Màu sắc HẾT  -->

<!-- Giới thiệu design template  -->
<section class="uk-section">
    <div class="uk-container">
        
         <?php echo files()->include('views/notecard/parts/_notecard-design-tmp-items.php');?>            
        
    </div>
</section>
<!-- Giới thiệu design template  HẾT  -->
</pw-region>