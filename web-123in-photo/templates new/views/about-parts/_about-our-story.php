<?php namespace ProcessWire;

?>
<section class="uk-section uk-section-large">
    <div class="uk-container">
        <div class="tw-element uk-text-center tw-heading">
            <h3><?=$page->about_intro_block->title?></h3>
            <p><?=$page->about_intro_block->description?></p>
        </div>

        <div class="tw-element uk-text-center">
        <?php 
            $imageLink = '';
            $imageLink = getImageUrlFromImages($page->images, $page->about_intro_block->image_name);
         ?>
            <img src="<?=$imageLink?>" alt="đội ngũ 123in" />
        </div>

        <div class="uk-child-width-1-1 uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div > .tw-box; cls:uk-animation-slide-bottom-medium; delay: 300;">
            <div>
                <div class="tw-element tw-box">
                    <h4>
                    <?=$page->about_mission_block->title_mission?>
                    </h4>
                    <p class="description">
                    <?=$page->about_mission_block->desc_mission?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                <h4>
                    <?=$page->about_mission_block->title_vision?>
                    </h4>
                    <p class="description">
                    <?=$page->about_mission_block->desc_vision?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                <h4>
                    <?=$page->about_mission_block->title_passion?>
                    </h4>
                    <p class="description">
                    <?=$page->about_mission_block->desc_passion?>
                </p>
                </div>
            </div>
        </div>
    </div>
</section>
