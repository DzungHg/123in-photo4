<?php namespace ProcessWire;

?>

<pw-region id="page-content">
    <!-- head image and cubersome END -->
    <?php include('views/template-parts/_basic-page-header.php') ?>
    <!-- head image and cubersome -->

    <!-- sticky menu -->
    <?php echo files()->render('views/biz_services-parts/_sticky-sub-menu.php') ?>
    <!-- sticky menu END -->
     <!-- service statments -->
     <?php echo files()->render('views/biz_services-parts/_service-statements.php') ?>
    <!-- service statments END -->

    <!-- service body -->
     <?php echo files()->render('views/biz_services-parts/_service-body.php') ?>
    <!-- service body END -->

    <!-- service contact -->
    <?php echo files()->render('views/biz_services-parts/_service-send-contact.php') ?>
    <!-- service contact END -->
    
</pw-region>
