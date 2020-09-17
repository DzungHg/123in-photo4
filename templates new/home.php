<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
    <!-- home slider END -->
    <?php echo files()->render('views/home-parts/_home-slider.php') ?>
    <!-- home slider END -->

    <!-- phần feature product  và tuyên bố trong đây -->
    <?php echo files()->render('views/home-parts/_home-feature-products.php') ?>

    <!-- làm chứng  -->
    <?php echo files()->render('views/home-parts/_home-testimonials.php') ?>



    

</pw-region>