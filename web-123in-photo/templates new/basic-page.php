<?php

namespace ProcessWire;

?>

<pw-region id="page-content">
	<!-- head image and cubersome END -->
	<?php include('views/template-parts/_basic-page-header.php') ?>
	<!-- head image and cubersome -->
	<section class="uk-section">
		<div class="uk-container uk-container-small">
			<div data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 400;">
				<div class="uk-width-1-1">
					<?= $page->body ?>
				</div>
			</div>
		</div>
	</section>

</pw-region>