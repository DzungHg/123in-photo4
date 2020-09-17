<?php

namespace ProcessWire;

?>
<section class="uk-section uk-light uk-background-cover uk-background-fixed" data-overlay="0.5" style="background-color: #151515;background-image: url(<?= $urls->templates ?>assets/demo/startup-bg.jpg);" data-uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay: 900;">
    <div class="uk-container">

        <div class="tw-element tw-call-action uk-padding-remove-horizontal" data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 400;">
            <div class="call-content">
                <h2><?= $page->home_want_to_work->title ?></h2>
            </div>
            <div class="call-btn">
                <a href="<?= $page->home_url_to_contact_page ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $page->home_want_to_work->button_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
        </div>

    </div>
</section>