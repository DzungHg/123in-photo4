<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->
<!-- nội dung trang thay đổi -->

<section class="uk-section">
    <div class="uk-container uk-container-xsmall">

        <div class="uk-child-width-expand uk-grid-small" data-uk-grid>
            <div class="uk-width-1-1">               
                <div class="tw-element tw-accordion">
                    <ul data-uk-accordion="collapsible: false;" data-uk-scrollspy="target: > li; cls:uk-animation-slide-bottom-medium; delay: 300;">
                    <?php
                    foreach ($page->page_repeaters as $item)
                    {
                        if ($item->type == 'questions_answers')
                        {?>
                            <li>
                                <h3 class="uk-accordion-title"><?=$item->title_line?></h3>
                                <div class="uk-accordion-content">
                                    <p><?=$item->textarea?></p>
                                </div>
                            </li>

                        <?php 
                        }
                    }
                      ?>               
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</section>
</pw-region>