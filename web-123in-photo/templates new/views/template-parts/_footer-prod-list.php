<?php

namespace ProcessWire;
//đưa tất cả các type sản phẩm ra đây
$footerProdItems = PageArray();
$sPage = pages()->get("template=web-settings");

foreach ($sPage->nav_menu_repeaters as $item) {
   if ($item->type == "footer_product") {
      $footerProdItems->add($item);
   }
}
$classStr = "";
if ($footerProdItems->count <= 6) {
   $classStr = "";
} else {
   $classStr = "uk-column-1-2";
}

?>

<div class="widget">
   <h3 class="widget-title"><span>Sản phẩm</span></h3>
   <ul class="<?= $classStr ?>">
      <?php
      foreach ($footerProdItems as $item) {
      ?>
         <li>
            <a href="<?= $item->url_link ?>"><?= $item->title_line ?></a>
         </li>
      <?php
      }
      ?>

   </ul>
</div>