<?php namespace ProcessWire;

$imageUrl = '';
$imageUrl = getImageUrlFromImages($page->images, $page->title_image_name); 
?>

    <!-- body và image title -->
    
<div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="<?=$imageUrl?>" alt="Hình tiêu đề" uk-cover>
        <canvas width="580" height="400"></canvas>                            
    </div>
    <div class="uk-card-body">                        
        <?=$page->body?>                       
    </div>    
                        
</div>
    

   