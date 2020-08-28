<?php

namespace ProcessWire;

$pCardTypePage = pages("/buu-thiep/");

?>
<pw-region id="page-content">
    <!-- head image and cubersome END cần thêm thông số-->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- 3 điểm nhấn của giấy -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $pCardTypePage->postcard_pp_intro_on_size_prod->title ?>
                </h3>
                <p class="subtitle">
                    <?= $pCardTypePage->postcard_pp_intro_on_size_prod->description ?>
                </p>
            </div>
            <!-- 4 tùy tính sau theo số lượng-->
            <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m uk-grid-match" uk-grid>
                <?php echo files()->include('views/postcard/parts/_prod-by-size-paper-intros.php'); ?>
            </div>
        </div>
    </section>
    <!--phần hình giữa -->
    <?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515']); ?>
</pw-region>