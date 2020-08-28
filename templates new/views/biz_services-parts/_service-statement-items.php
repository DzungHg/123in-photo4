<?php

namespace ProcessWire;

?>
<section class="uk-section">
    <div class="uk-container">

        <div class="tw-element uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-expand@m" uk-grid>
            <?php
            foreach ($page->biz_services_repeaters_m as $item) {
                if ($item->type == "4_statement") {
            ?>
                    <div>
                        <div class="tw-element tw-box layout-2">
                            <i class="<?= $item->image_name ?>"></i>
                            <h4><?= $item->title_line ?></h4>
                            <p class="description"><?= $item->description_area ?></p>
                        </div>
                    </div>
            <?php

                }
            }
            ?>
        </div>
    </div>
</section>