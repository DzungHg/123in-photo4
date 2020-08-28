<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- invitation by paper -->
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->invitation_by_paper_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->invitation_by_paper_block->description?>
            </p>
        </div>
    
    <!-- cards postcard by paper-->
    <?=include("views/invitation/parts/_invitation-by-paper.php")?>
    </div>
</section>

<!-- invitation by paper END -->
<!-- invitation by size -->
<section class="uk-section"  style="background-color: #f7f7f7;">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->invitation_by_size_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->invitation_by_size_block->description?>
            </p>
        </div>
        <!-- cards by siz -->
        <?=include("views/invitation/parts/_invitation-by-size.php")?>
    </div>
</section>
<!-- invitation by size end -->


</pw-region>