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
			<!--Detail tabs: -->

			<div class="tw-element tw-tab">
				<ul class="uk-flex-center" data-uk-tab="connect: #uk-switch-3; animation: uk-animation-slide-bottom-medium;">
					<?php
					foreach ($page->page_repeaters as $item) {
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
							foreach ($page->page_repeaters as $item) {
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
	</section>

	</div>
</pw-region>