<?php namespace ProcessWire;
     
     $flyerByPapers = pages()->get("/to-roi/")->children("template=flyer-by-paper-prod, limit=3");

    //
    $linkToOrder = '';
    $linkToOrder = $vars["linkToOrder"];

?>

<?php 
$imageUrl = '';
$i = 0;
foreach ($flyerByPapers as $item)
{
    $imageUrl = getImageUrlFromImages($item->images, $item->product_paper_image_name);
    ?>
    <div>
        <div class="tw-element tw-box">
            <img src="<?=$imageUrl?>" alt="<?=$item->product_paper_name?>" />
            <h4>
            <?=$item->product_paper_name?>
            </h4>
            <!-- CK Têxt-->
            <?=$item->product_paper_intro?>
            
            <a href="<?= $linkToOrder?>" target="<?=$page->product_front_intro->leard_to_target?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?=$item->product_front_intro->link_caption_to?></span><i class="ion-ios-arrow-thin-right"></i></span></a>

        </div>
    </div>

<?php } ?>

     