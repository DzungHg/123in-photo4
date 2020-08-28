<?php namespace ProcessWire;



?>
<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?= files()->render('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->
    <!-- features  -->
    <section class="uk-section">
       
        <?= files()->render('views/notebook/parts/_hard-cover-features.php') ?>
       
    </section>
    <!-- features HẾT -->

   <!-- color collection block  -->
   <section class="uk-section uk-section-muted">
        <?= files()->include('views/notebook/parts/_color_collec_block.php') ?>
   </section>


</pw-region>