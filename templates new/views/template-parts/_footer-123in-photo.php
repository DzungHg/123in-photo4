<?php namespace ProcessWire;
$pageItem = pages()->get("/web-settings/");
$homeUrl = pages('/')->url;
?>


   <div class="widget">
      <div class="tw-logo">
            <h3 class="site-name">
               <a href="<?=$homeUrl?>">123in Photo</a>
            </h3>
      </div>
      <p>
            <?=$pageItem->w_settings_123in_photo?>
      </p>
      <!--<div class="tw-socials">
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-instagram"></i></a>
            <a href="#"><i class="ion-social-pinterest"></i></a>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-social-youtube"></i></a>
            <a href="#"><i class="ion-social-rss"></i></a>
      </div> -->
      <?php echo socialProfiles(pages("/options/")->textarea) ?>
   </div>

