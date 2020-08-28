<?php namespace ProcessWire;
    $paperCate = pages()->get("template=flyer-category, code_num=2"); //'2 : theo kích thước
    $flyerBySizes = pages()->get("/to-roi/")->children("flyer_categories=$paperCate");

    //
    $linkToOrder = '';
    $linkToOrder = $vars["linkToOrder"];

?>

<?php 
$imageUrl = '';
foreach ($flyerBySizes as $item)
{
    $imageUrl = getImageUrlFromImages($item->images, $item->product_front_intro->image_intro_name);
    ?>
    <div>
        <div class="tw-element tw-box">
            <img src="<?=$imageUrl?>" alt="<?=$item->title?>" />
            <h4>
            <?=$item->title?>
            </h4>
            <!-- CK Têxt-->
            <?=$item->product_front_intro_text?>
            <a href="<?= $linkToOrder?>" target="<?=$page->product_front_intro->leard_to_target?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?=$item->product_front_intro->link_caption_to?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
        </div>
    </div>

<?php } ?>

     