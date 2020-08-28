<?php

namespace ProcessWire;

?>
<pw-region id="page-content">
   <!-- head image and cubersome END -->
   <?= files()->render('views/template-parts/_basic-page-header.php') ?>
   <!-- head image and cubersome -->

   <!-- notebook by it -->
   <section class="uk-section">
      <div class="uk-container">
      <?= files()->render('views/notebook/parts/_notebook-by-it.php') ?>
      <div class="uk-container">
   </section>
  <!-- notebook by it HẾT -->
</pw-region>