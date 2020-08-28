<?php namespace ProcessWire;
   
   $ukSectionMuted = $vars["ukSectionMuted"];
?>

<section class="uk-section uk-section-normal <?=$ukSectionMuted?>">
    <div class= "uk-container">
        <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?=$page->paper_stock_emboss_block->title?>
                </h3>
                <p class="subtitle">
                <?=$page->paper_stock_emboss_block->description?>
                </p>
        </div>
        <!-- render card -->
        <div class="tw-element tw-portfolio promo">
        <?php
        $imageLink = '';
        $clsPartStr = '';
        foreach ($page->paper_stock_repeaters as $item)
        {
            if ($item->type == 'paper_emboss')
            {
                if (trim($item->class_text) == 'left')
                    {
                    $clsPartStr = "uk-card-media-". trim($item->class_text);
                    }
                    else {
                        $clsPartStr = "uk-flex-last@s uk-card-media-". trim($item->class_text);
                    }

                $imageLink = getImageUrlFromImages($page->images, $item->image_name)
                ?>
              
                    <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                        <div class="<?=$clsPartStr?> uk-cover-container">
                            <img src="<?=$imageLink?>" alt="<?=$item->image_alt_text?>" uk-cover>
                            <canvas width="500" height="300"></canvas>                            
                        </div>
                        <div class="uk-card-body">                        
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