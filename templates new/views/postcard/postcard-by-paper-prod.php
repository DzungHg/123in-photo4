<?php

namespace ProcessWire;

$pCTypePage = pages("/buu-thiep/");

?>
<pw-region id="page-content">
    <!-- head image and cubersome END cần thêm thông số-->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- section 01: render theo chức năng giấy hoặc title -->
    <section class="uk-section">
        <div class="uk-container">
            <?php
            if (trim($page->postcard_head_title) == '') {
                files()->include('views/postcard/parts/_prod-by-paper-papers.php');
            } else {
                files()->include('views/postcard/parts/_prod-by-paper-title.php');
            }
            ?>

        </div>
    </section>

    <!-- by size -->
    <section class="uk-section" style="background-color: #f7f7f7;">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $pCTypePage->flyer_by_size_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $pCTypePage->flyer_by_size_block->description ?>
                </p>
            </div>
            <!--chỉ 35 kích thước-->
            <div class="uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid-match" uk-grid>
                <?= files()->include('views/postcard/parts/_prod-size-items-on.php') ?>
            </div>
        </div>
    </section>
    <!--phần hình banner giữa -->
    <?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515']); ?>
</pw-region>