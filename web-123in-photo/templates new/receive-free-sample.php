<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <section class="uk-section uk-background-cover">
        <div class="uk-container">
            <?php echo $page->body ?>
        </div>
    </section>
    <section class="uk-section">
        <div class="uk-container uk-container-xsmall">
            <div class="tw-heading tw-element uk-text-center">
                <h3><?= $page->receive_fr_sample_form_block->title ?></h3>
                <p><?= $page->receive_fr_sample_form_block->description ?></p>
            </div>
            <!--form liên hệ theo default -->
            <?php echo $forms->embed('lien-he'); ?>
        </div>
    </section>
</pw-region>
<!-- bỏ form nhận mẫu ở đay -->
<section id="order-sample"></section>