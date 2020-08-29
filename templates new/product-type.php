<?php namespace ProcessWire;


?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
<!-- tất cả sản phẩm  -->
<section class="uk-section">
    
    <div class="uk-container">
        <!-- item sản phẩm  -->
        <?= files()->render('views/products-parts/_products-prod-type-items.php')?>
    </div>

</section>
<!-- tất cả sản phẩm HẾT  -->

<!-- Các sản phẩm được ưa thích  -->
<section class="uk-section uk-section-muted">
    
    <div class="uk-container">
        <!-- item sản phẩm  -->
        <?= files()->render('views/products-parts/_products-favourite-products.php')?>
    </div>

</section>
<!-- Các sản phẩm được ưa thích  HẾT  -->

</pw-region>