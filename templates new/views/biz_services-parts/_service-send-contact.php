<?php namespace ProcessWire;

?>
<section class="uk-section">
    <div class="uk-container uk-container-xsmall">
        <div class="tw-heading tw-element uk-text-center">
            <h3><?=$page->biz_services_contact_block->title?></h3>
            <p><?=$page->biz_services_contact_block->description?></p>
        </div>
        <!--form liên hệ theo theme default -->
        <?php echo $forms->embed('lien-he-account-manager'); ?>
    </div>
</section>
