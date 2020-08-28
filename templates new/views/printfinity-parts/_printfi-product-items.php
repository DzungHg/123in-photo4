<?php

namespace ProcessWire;

$imageLink = '';
foreach ($page->page_repeaters as $item) {
   if ($item->type == "printfi_product_item") {
      $imageLink = getImageUrlFromImages($page->images, $item->image_name);
?>
      <div>
         <div class="tw-element tw-box">
            <img src="<?= $imageLink ?>" alt="<?= $item->title_line ?>">
            <h4><?= $item->title_line ?></h4>
            <?= $item->description_ck ?>
            <a href="<?= $item->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title_line ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>

         </div>
      </div>
<?php }
}
?>