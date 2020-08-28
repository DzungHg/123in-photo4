<?php namespace ProcessWire;

$imageUrl = '';
?>
    <!-- body và image title -->
    <div class="uk-container">
    <?php 
   
    $imageUrl = getImageUrlFromImages($page->images, $page->title_image_name); 
     ?>
        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?=$imageUrl?>" alt="Hình tiêu đề" uk-cover>
                <canvas width="580" height="400"></canvas>                            
            </div>
            <div class="uk-card-body">                        
                <?=$page->body?>                       
            </div>    
                              
        </div>
    </div>

    <!-- 4 features-->
    <div class="uk-container uk-margin-large-top">    
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($page->notebook_repeaters_m as $item)
            {
                if ($item->type == "feature")
                {
                $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>" />
                            
                            <?=$item->description_ck?>
                           
                        </div>
                    </div>

                <?php
            }
        }
            ?>
            
        </div>
    </div>