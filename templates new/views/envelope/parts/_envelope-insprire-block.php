<?php namespace ProcessWire;
     $imageLink = '';
     $imageLink = getImageUrlFromImages($page->images, $page->title_image_name);  
?>

<div class="tw-element tw-portfolio promo">
<!-- render card -->
    <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
            <img src="<?=$imageLink?>" alt="Hình" uk-cover>
            <canvas width="585" height="400"></canvas>                            
        </div>
        <div class="uk-card-body">                        
            <?=$page->body?>
        </div>                        
    </div>
</div>