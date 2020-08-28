<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- 3 điểm overview của greeting card -->
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->grt_card_3_overviews_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->grt_card_3_overviews_block->description?>
            </p>
        </div>
        <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-expand@m uk-grid-match" data-uk-grid >
            <?php
            $imageUrl = '';
            foreach (page()->grt_card_repeaters as $item)
            {
                if ($item->type =='3_overviews')
                {
                $imageUrl = getImageUrlFromImages(page()->images, $item->image_name);
                ?>
                <div>
                    <div class="tw-element tw-box">
                        <img src="<?=$imageUrl?>" alt="<?=$item->image_alt_text?>" />                                               
                        <?=$item->description_ck?>                        
                    </div>
                </div>

                <?php } ?>
                <?php } ?>
            
        </div>
    </div>
</section>

<!-- by size -->
<section class="uk-section" style="background-color: #f7f7f7;">
    <div class="uk-container">
    <?php 
    $imageLink = '';
    $imageLink = getImageUrlFromImages($page->images, $page->title_image_name); 
     ?>
        <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="<?=$imageLink?>" alt="Hình tiêu đề" uk-cover>
                <canvas width="584" height="400"></canvas>                            
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

<?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor'=>'#151515']);?>

</pw-region>