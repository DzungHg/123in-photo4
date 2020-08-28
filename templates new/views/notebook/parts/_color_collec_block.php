<?php namespace ProcessWire;

//số cột của card
$cardColumns = trim($page->notebook_color_collec_block->card_columns);
$renderCollect01 = false;
$renderCollect02 = false;

$i01 = 0;
$i02 = 0;
foreach ($page->notebook_repeaters_m as $item)
{
    if ($item->type == "color_collection_01")
    {
        $i01 += 1;
        break;
    }
}
foreach ($page->notebook_repeaters_m as $item)
{
    if ($item->type == "color_collection_02")
    {
        $i02 += 1;
        break;
    }

}
//
if ($i01 > 0)
{
    $renderCollect01 = true;
}
if ($i02 > 0)
{
    $renderCollect02 = true;
}
//Tạo class cột:
$classStr = '';
//Tạo class dựa theo số cột 3 hoặc 4 
switch ($cardColumns)
{
    case "4":
        $classStr = "uk-child-width-1-1  uk-child-width-1-4@m uk-child-width-1-2@s";
        break;

    case "3":
        $classStr = "uk-child-width-1-1 uk-child-width-1-3@m";
        break;    

    default:
        $classStr = "uk-child-width-1-1 uk-child-width-1-".$renderCollect01."@s";
}
?>

<?php
// render collection 01
if ($renderCollect01)
{
    ?>
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
                <h3>
                    <?=$page->notebook_color_collec_block->title?>
                </h3>
                <p class="subtitle">
                    <?=$page->notebook_color_collec_block->description?>
                </p>
        </div>
            <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element <?=$classStr?> uk-grid-match" uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <?php
            $imageUrl = '';
            foreach ($page->notebook_repeaters_m as $item)
            {
                if ($item->type == "color_collection_01")
                {
                    $imageUrl = getImageUrlFromImages($page->images, $item->image_name);
                    ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>"/>
                                                    
                            <?=$item->description_ck?>
                        </div>
                    </div>

                <?php
                };
            };
            ?>   
        </div>
        <!-- nút bấm chọn đặt hàng-->
    <div class="tw-element tw-heading uk-text-center">
        <a href="<?= $page->notebook_color_collec_block->url_link ?>" target = "<?=$page->notebook_color_collec_block->url_target_attr?>" class="uk-button uk-button-default uk-button-small uk-button-radius tw-hover"><span class="tw-hover-inner"><span><?= $page->notebook_color_collec_block->url_link_caption ?></span><i class="ion-ios-arrow-thin-right"></i></span></a>
    </div>
    </div>
    
<?php 
}
?>