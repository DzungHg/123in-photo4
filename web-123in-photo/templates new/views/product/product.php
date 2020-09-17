<?php

namespace ProcessWire;

?>


<!--<div id="hero" data-pw-remove></div>  -->

<pw-region id="page-content">
   <!--Product Image Slides-->
   <?php echo files()->render('views/product/parts/_prod-slide.php') ?>
   <!--Detail tabs-->
   <?php echo files()->render('views/product/parts/_prod-detail-tabs.php') ?>
</pw-region>