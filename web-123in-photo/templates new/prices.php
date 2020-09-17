<?php

namespace ProcessWire;

?>

<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <section class="uk-section">
        <div class="uk-container uk-container-small">
            <div data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 400;">
                <div class="uk-width-1-1">
                    <?= $page->body ?>
                </div>
            </div>
        </div>
    </section>
    <!-- service contact section đã ở trong-->
    <section class="uk-section" style="background-color: #f7f7f7;">
        <div class="uk-container uk-container-xsmall">
            <div class="tw-heading tw-element uk-text-center">
                <h3 id="<?= $page->biz_services_contact_block->anchor ?>"><?= $page->biz_services_contact_block->title ?></h3>
                <p><?= $page->biz_services_contact_block->description ?></p>
            </div>
            <!--form liên hệ theo theme default -->
            <?php echo $forms->embed('lien-he-account-manager'); ?>
        </div>
    </section>
    <!-- service contact END -->

</pw-region>