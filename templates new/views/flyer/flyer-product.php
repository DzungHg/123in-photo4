<?php namespace ProcessWire;

$productPage = pages()->get("template=product");
?>


<!--<div id="hero" data-pw-remove></div>  -->

<pw-region id="page-content">
<?php echo files()->render('views/flyer/parts/_flyer-prod-section01.php') ?>
</pw-region>
