<?php

namespace ProcessWire;


?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- Các sản phẩm được ưa thích  -->
    <section class="uk-section">
        <div class="uk-container">
            <!-- item sản phẩm  -->
            <?= files()->render('views/luxe_products-parts/_luxe_prod-products.php') ?>
        </div>

    </section>
    <!-- Các sản phẩm được ưa thích  HẾT  -->

    <!-- Text chất lượng giấy -->
    <?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/luxe_products-parts/_luxe_prod-quality-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515', 'text' => $page->luxe_prod_finest_qty_text]);
    ?>

    <!-- Các màu Tỏa sáng  -->
    <section class="uk-section">
        <div class="uk-container uk-margin-small">
            <!-- item sản phẩm  -->
            <?= files()->render('views/luxe_products-parts/_luxe_prod-color-items.php') ?>
        </div>

    </section>
    <!--beyond printing -->
    <section class="uk-section uk-section-muted">
        <div class="uk-container">
            <?= files()->render('views/luxe_products-parts/_luxe_prod-bey-print.php') ?>
        </div>
    </section>


</pw-region>
<!--Đặt mẫu uk section đã ở trong-->
<?php $imageUrl = getImageUrlFromImages(page()->images, page()->order_sample_image_name);
files()->include('views/template-parts/_order-sample.php', ['imageUrl' => $imageUrl, 'ukMutedText' => '']) ?>