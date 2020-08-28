<?php namespace ProcessWire;

?>
<pw-region id="page-content">		
<!-- head image and cubersome END -->
<?=files()->render('views/template-parts/_basic-page-header.php') ?>
<!-- head image and cubersome -->

<!-- nội dung trang thay đổi -->
<?=files()->include('views/flyer/parts/_flyer-by-paper.php')?>
<!-- by size -->
<?=files()->include('views/flyer/parts/_flyer-by-size.php', ["backGroundColor" => "#f7f7f7"])?>

</pw-region>