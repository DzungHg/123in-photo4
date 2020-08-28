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
                                
                <?=$item->description_ck?>
                
                <a href="<?=$item->url_link?>"><?=$item->caption_text?></a>
            </div>
        </div>

    <?php }

}