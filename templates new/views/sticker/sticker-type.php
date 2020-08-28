<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->
<!-- nội dung trang thay đổi -->
<?=include('views/sticker/parts/_sticker-by-product.php')?>

<!-- 3 ứng dụng của nhãn -->
<section class="uk-section" style="background-color: #f7f7f7;" >
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->sticker_3_applications_block->title?>
            </h3>
            <p class="subtitle">
                <?=$page->sticker_3_applications_block->description?>
            </p>
        </div>
        <!-- hiện tại  show ra 3 cái, 4 tùy tính sau theo số lượng-->
        <div class="tw-element uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-expand@m uk-grid-match" data-uk-grid >
            <?php
            $imageUrl = '';
            foreach (page()->product_repeaters as $item)
            {
                if ($item->type =='sticker_3_applications')
                {
                    $imageUrl = '';
                    $imageUrl = getImageUrlFromImages(page()->images, $item->image_name);
                    ?>
                    <div>
                        <div class="tw-element tw-box">
                            <img src="<?=$imageUrl?>" alt="Hình" />
                            <h4>
                                <?=$item->title_line?>
                            </h4>
                            
                            <?=$item->description_area?>
                            
                        </div>
                    </div>

                <?php } ?>
                <?php } ?>
            
        </div>
    </div>
</section>
<!-- 3 ứng dụng của nhãn HẾT-->

<!-- Banner giữa inspri -->
<?php
    //lấy url hình to
    $imageUrl = getImageUrlFromImages(page()->images, page()->banner_image_name);
    echo files()->include('views/template-parts/_page-middle-banner.php', ['imageUrl' => $imageUrl, 'bgColor'=>'#151515']);
?>

</pw-region>