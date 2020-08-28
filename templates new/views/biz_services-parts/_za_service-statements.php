<?php namespace ProcessWire;
    $bizPage = pages()->get("/dich-vu-doanh-nghiep/");
    $classStr = $vars['classStr'];
?>
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <div>
                <div class="tw-element tw-box">
                    <i class="<?=$bizPage->biz_services_statements->image_name_01?>"></i>
                    <h4>
                        <?=$bizPage->biz_services_statements->title_01?>
                    </h4>
                    <p class="description">
                    <?=$bizPage->biz_services_statements->description_01?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                <i class="<?=$bizPage->biz_services_statements->image_name_02?>"></i>
                    <h4>
                        <?=$bizPage->biz_services_statements->title_02?>
                    </h4>
                    <p class="description">
                    <?=$bizPage->biz_services_statements->description_02?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <i class="<?=$bizPage->biz_services_statements->image_name_03?>"></i>
                    <h4>
                        <?=$bizPage->biz_services_statements->title_03?>
                    </h4>
                    <p class="description">
                    <?=$bizPage->biz_services_statements->description_03?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <i class="<?=$bizPage->biz_services_statements->image_name_04?>"></i>
                    <h4>
                        <?=$bizPage->biz_services_statements->title_04?>
                    </h4>
                    <p class="description">
                    <?=$bizPage->biz_services_statements->description_04?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
