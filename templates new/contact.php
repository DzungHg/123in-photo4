<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <section class="uk-section uk-background-cover">
        <div class="uk-container">
            <div class="uk-child-width-expand@s uk-text-center" data-uk-grid data-uk-scrollspy="target: > div > .tw-box; cls:uk-animation-slide-bottom-medium; delay: 300;">

                <div>
                    <div class="tw-element tw-box custom-typography uk-margin-bottom">
                        <i class="<?= $page->contact_contact_details->icon_name_01 ?> uk-border-circle layout-2"></i>
                        <h4><?= $page->contact_contact_details->title_01 ?></h4>
                        <p class="description">
                            <?= $page->contact_contact_details->description_01 ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="tw-element tw-box custom-typography uk-margin-remove-top uk-margin-bottom">
                        <i class="<?= $page->contact_contact_details->icon_name_02 ?> uk-border-circle layout-2"></i>
                        <h4><?= $page->contact_contact_details->title_02 ?></h4>
                        <p class="description">
                            <?= $page->contact_contact_details->description_02 ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="tw-element tw-box custom-typography uk-margin-remove-top">
                        <i class="<?= $page->contact_contact_details->icon_name_03 ?> uk-border-circle layout-2"></i>
                        <h4><?= $page->contact_contact_details->title_03 ?></h4>
                        <p class="description">
                            <?= $page->contact_contact_details->description_03 ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="uk-section uk-padding-remove">
        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
            <div class='uk-flex uk-flex-center uk-margin-top' id="map2" style="width: 100%; height: 500px;"><?= page('google_map') ?></div>
        </div>
    </section>

    <section class="uk-section">
        <div class="uk-container uk-container-xsmall">
            <div class="tw-heading tw-element uk-text-center">
                <h3><?= $page->contact_contact_block->title ?></h3>
                <p><?= $page->contact_contact_block->description ?></p>
            </div>
            <!--form liên hệ theo default -->
            <?php echo $forms->embed('lien-he'); ?>
        </div>
    </section>
</pw-region>