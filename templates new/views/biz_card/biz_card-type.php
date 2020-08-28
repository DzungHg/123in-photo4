<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
   <!-- head image and cubersome END -->
   <?= files()->render('views/template-parts/_basic-page-header.php') ?>
   <!-- head image and cubersome -->

   <!-- biz card by paper -->

   <?= include('views/biz_card/parts/_biz-card-by-paper.php') ?>
   <!-- by size -->
   <section class="uk-section" style="background-color: #f7f7f7;">
      <div class="uk-container">
         <?= files()->render('views/biz_card/parts/_biz-card-by-size.php') ?>
      </div>
   </section>

   <!-- by hiệu ứng -->
   <section class="uk-section">
      <div class="uk-container">
         <?= files()->render('views/biz_card/parts/_biz-card-by-finish.php') ?>
      </div>
   </section>
</pw-region>