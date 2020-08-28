<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- nội dung trang thay đổi -->
<!-- loại giấy original .uk-section-muted-->



<?=$files->include('views/paper_stock-parts/_paper-lux.php', ["bg_color" => ""])?>

<?=files()->include('views/paper_stock-parts/_paper-super.php', ["bg_color" => "#f7f7f7"])?>

<?=files()->include('views/paper_stock-parts/_paper-emboss.php', ["ukSectionMuted" => ""])?>

<?=files()->include('views/paper_stock-parts/_paper-original.php', ["ukSectionMuted" => "uk-section-muted"])?>



</pw-region>