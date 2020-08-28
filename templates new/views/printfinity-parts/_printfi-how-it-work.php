<?php

namespace ProcessWire;
//
$imageLinkStm01 = '';
$imageLinkStm02 = '';
$imageLinkStm03 = '';
$imageLinkStm04 = '';

$imageLinkStm01 = getImageUrlFromImages($page->images, $page->printfi_top_4statements->image_name01);
$imageLinkStm02 = getImageUrlFromImages($page->images, $page->printfi_top_4statements->image_name02);
$imageLinkStm03 = getImageUrlFromImages($page->images, $page->printfi_top_4statements->image_name03);
$imageLinkStm04 = getImageUrlFromImages($page->images, $page->printfi_top_4statements->image_name04);
//
$imageLinkHIW01 = '';
$imageLinkHIW02 = '';
$imageLinkHIW03 = '';
$imageLinkHIW04 = '';

$imageLinkHIW01 = getImageUrlFromImages($page->images, $page->printfi_hw_it_wk_4blocks->image_name01);
$imageLinkHIW02 = getImageUrlFromImages($page->images, $page->printfi_hw_it_wk_4blocks->image_name02);
$imageLinkHIW03 = getImageUrlFromImages($page->images, $page->printfi_hw_it_wk_4blocks->image_name03);
$imageLinkHIW04 = getImageUrlFromImages($page->images, $page->printfi_hw_it_wk_4blocks->image_name04);


?>
<section class="uk-section">
    <!-- phần tuyên bố dịch vụ -->
    <div class="uk-container">
        <div class="tw-element uk-text-center uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 300;">
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkStm01 ?>" alt="<?= $page->printfi_top_4statements->title01 ?>">
                    <h4>
                        <?= $page->printfi_top_4statements->title01 ?>
                    </h4>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkStm02 ?>" alt="<?= $page->printfi_top_4statements->title012 ?>">
                    <h4>
                        <?= $page->printfi_top_4statements->title02 ?>
                    </h4>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkStm03 ?>" alt="<?= $page->printfi_top_4statements->title03 ?>">
                    <h4>
                        <?= $page->printfi_top_4statements->title03 ?>
                    </h4>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkStm04 ?>" alt="<?= $page->printfi_top_4statements->title04 ?>">
                    <h4>
                        <?= $page->printfi_top_4statements->title04 ?>
                    </h4>
                </div>
            </div>

        </div>
    </div>
    <!-- phần tuyên bố dịch vụ HẾT -->
    <!-- phần chêm -->
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <br>
        </div>
    </div>
    <!-- phần chêm HẾT -->

    <!-- phần 4 item how it work -->
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?= $page->printfi_hw_it_wk_block->title ?>
            </h3>
            <p class="subtitle">
                <?= $page->printfi_hw_it_wk_block->description ?>
            </p>
        </div>
        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match" data-uk-grid>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkHIW01 ?>" alt="<?= $page->printfi_hw_it_wk_4blocks->title01 ?>">
                    <h4>
                        <?= $page->printfi_hw_it_wk_4blocks->title01 ?>
                    </h4>
                    <p class="description">
                        <?= $page->printfi_hw_it_wk_4blocks->description01 ?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkHIW02 ?>" alt="<?= $page->printfi_hw_it_wk_4blocks->title02 ?>">
                    <h4>
                        <?= $page->printfi_hw_it_wk_4blocks->title02 ?>
                    </h4>
                    <p class="description">
                        <?= $page->printfi_hw_it_wk_4blocks->description02 ?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkHIW03 ?>" alt="<?= $page->printfi_hw_it_wk_4blocks->title03 ?>">
                    <h4>
                        <?= $page->printfi_hw_it_wk_4blocks->title03 ?>
                    </h4>
                    <p class="description">
                        <?= $page->printfi_hw_it_wk_4blocks->description03 ?>
                    </p>
                </div>
            </div>
            <div>
                <div class="tw-element tw-box">
                    <img src="<?= $imageLinkHIW04 ?>" alt="<?= $page->printfi_hw_it_wk_4blocks->title04 ?>">
                    <h4>
                        <?= $page->printfi_hw_it_wk_4blocks->title04 ?>
                    </h4>
                    <p class="description">
                        <?= $page->printfi_hw_it_wk_4blocks->description04 ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- phần 4 item how it work HẾT  -->
</section>