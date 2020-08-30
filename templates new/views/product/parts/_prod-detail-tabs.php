<?php

namespace ProcessWire;


?>

<div class="tw-element tw-tab">
    <ul class="uk-flex-center" data-uk-tab="connect: #uk-switch-3; animation: uk-animation-slide-bottom-medium;">
        <?php
        foreach ($page->product_repeaters as $item) {
            if ($item->type == "detail_tab") { ?>
                <li><a href="#"><?= $item->title_line ?></a></li>
        <?php
            }
        }
        ?>
    </ul>
    <section class="uk-section uk-padding-remove-vertical uk-margin-large-bottom">
        <div class="uk-container">
            <ul id="uk-switch-3" class="uk-switcher">
                <?php
                foreach ($page->product_repeaters as $item) {
                    if ($item->type == "detail_tab") { ?>
                        <li>
                            <div class="uk-child-width-1-1@s uk-margin-large-top" data-uk-grid data-uk-scrollspy="target: > div;cls:uk-animation-slide-bottom-medium; delay: 200">
                                <div>
                                    <?= $item->description_ck ?>
                                </div>
                            </div>
                        </li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </section>
</div>