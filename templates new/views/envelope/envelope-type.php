<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->
<!-- nội dung trang thay đổi  style="background-color: #f7f7f7;" -->
<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->envelope_text_titles->small_size?>
            </h3>
        </div>
        <!-- 2 card tính năng ở đây-->
        <?=files()->include('views/envelope/parts/_envelope-small-items.php') ?>
    </div>
</section>

<section class="uk-section" style="background-color: #f7f7f7;">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->envelope_text_titles->medium_size?>
            </h3>
        </div>
        <!-- 2 card tính năng ở đây-->
        <?=files()->include('views/envelope/parts/_envelope-medium-items.php') ?>
    </div>
</section>

<section class="uk-section">
    <div class="uk-container">
        <div class="tw-element tw-heading uk-text-center">
            <h3>
                <?=$page->envelope_text_titles->other_size?>
            </h3>
        </div>
        <!-- 2 card tính năng ở đây-->
        <?=files()->include('views/envelope/parts/_envelope-other-items.php') ?>
    </div>
</section>
<!-- Đoạn inspriring  -->
<section class="uk-section" style="background-color: #f7f7f7;">
    <div class="uk-container">
        <!-- 2 card tính năng ở đây-->
        <?=include('views/envelope/parts/_envelope-insprire-block.php') ?>
    </div>
</section>
</pw-region>