<?php

namespace ProcessWire;

$bizPage = pages()->get("/dich-vu-doanh-nghiep/");
//$classStr = $vars['classStr'];
?>



<?php
foreach ($bizPage->biz_services_repeaters_m as $item) {
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