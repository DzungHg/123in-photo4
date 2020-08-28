<?php namespace ProcessWire;
///Lấy biến từ ngoài vô gồm: image, text và link, caption
///Nên cần cón items là đối tượng có cấu trúc

$imageUrl = '';
foreach ($page->page_repeaters as $item)
{
    if ($item->type == "next_day_deli_item")
    {
        $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
        ?>
        <div>
            <div class="tw-element tw-box">
                <img src="<?=$imageUrl?>" alt="" />
                <h4><?=$item->title_line?></h4>                
                <?=$item->description_ck?>
                <a href="<?= $item->url_link ?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span>Xem <?= $item->title_line ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>

            </div>
        </div>

    <?php }

}