<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
   <!-- head image and cubersome END -->
   <?= files()->render('views/template-parts/_basic-page-header.php') ?>
   <!-- head image and cubersome -->

   <!-- by hiệu ứng -->
   <section class="uk-section">
      <div class="uk-container">
         <?= files()->render('views/biz_card/parts/_biz-card-by-finish.php') ?>
      </div>
   </section>
   <!-- by hiệu ứng HẾT -->

   <!-- by size -->
   <section class="uk-section" style="background-color: #f7f7f7;">
      <div class="uk-container">
         <?= files()->render('views/biz_card/parts/_biz-card-by-size.php') ?>
      </div>
   </section>

   <!--phần hình banner giữa -->
   <?php
   //lấy url hình to
   $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
   echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor' => '#151515']); ?>
</pw-region>