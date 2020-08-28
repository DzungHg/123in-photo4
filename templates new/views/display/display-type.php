<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- liệt kê sản phẩm -->
    <section class="uk-section">
        <div class="uk-container">
            <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?= $page->display_product_block->title ?>
                </h3>
                <p class="subtitle">
                    <?= $page->display_product_block->description ?>
                </p>
            </div>

            <!-- cards postcard by paper-->
            <?= include("views/display/parts/_display-by-all.php") ?>
        </div>
    </section>

    <!-- liệt kê sản phẩm END -->
</pw-region>
<!-- việc nhận mẫu -->
<section id="order-sample"></section>