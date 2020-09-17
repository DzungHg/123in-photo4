<?php namespace ProcessWire; 
$imageUrl = getImageUrlFromImages(page()->images, page()->header_image_name);;
?>
<section class="uk-section uk-text-center uk-flex uk-flex-middle uk-flex-center uk-light uk-background-cover uk-background-top-center"
    data-overlay="0.4" style="background-color: #151515; background-image: url(<?=$imageUrl?>); height: 500px;">
    <div class="tw-page-title-container tw-element">
        <h1 class="tw-page-title uk-text-uppercase"><?=$page->title?></h1>
    </div>
    <div class="tw-breadcrumb-container uk-position-absolute uk-position-bottom-center tw-element">
        <?=ukBreadcrumb($page, ['class' => 'tw-breadrumb-child', 'appendCurrent' => true])?>
        <!--<a href="index.html" class="tw-breadrumb-child home">Home</a>
        <a href="#" class="tw-breadrumb-child">Pages</a>
        <a href="#" class="tw-breadrumb-child">Services</a>
        -->
    </div>
</section>