<?php namespace ProcessWire; 
$imageUrl = $vars['imageUrl'];
$bgColor = $vars['bgColor'];

?>
<section class="uk-section uk-text-center uk-flex uk-flex-middle uk-flex-center uk-light uk-background-cover uk-background-top-center"
    data-overlay="0.4" style="background-color: <?=$bgColor?>; background-image: url(<?=$imageUrl?>); height: 500px;">    
</section>