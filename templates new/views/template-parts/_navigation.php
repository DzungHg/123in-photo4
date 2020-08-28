<?php

namespace ProcessWire;

// get home page and home childrens
$root = pages('/')->and(pages()->find("template=biz_card-type|mkt-materials|business-services|about"));

$home = pages('/');
$danhThiep = pages()->get("template=biz_card-type");
//Tất cả danh mục của danh thiếp
$bizCardCates = pages()->get("template=biz_card-categories")->children();

$danhMktMat = pages()->get("template=mkt-materials");
$stationery = pages()->get("template=stationery");
$bizService = pages()->get("template=business-services");
$about =  pages()->get("template=about");
$question =  pages()->get("template=question");

$homeSubs = pages()->find("template=biz_card-cards|mkt-materials");
$allBizCards = pages()->get("template=biz_card-products")->child();

//Tạo các list menu nav top
$menuSettingPage = pages()->get("template=web-settings");
//Danh thiếp
$bizCardsByPaperList = new PageArray();
$bizCardsByFinishList = new PageArray();
foreach ($menuSettingPage->nav_menu_repeaters as $item) {
	if ($item->type == 'biz_cards_by_paper') {
		$bizCardsByPaperList->add($item);
	} else if ($item->type == 'biz_cards_by_finish') {
		$bizCardsByFinishList->add($item);
	}
};
//Marketing meterial kiểu lập trình
$postCardBySizes = pages()->find("template=postcard-by-size-prod");
$postCardByPapers = pages()->find("template=postcard-by-paper-prod");
$buuThiep = pages()->get("template=postcard-type");
//Tờ rơi
$flyerBySizes = pages()->find("template=flyer-by-size-prod");
$flyerByPapers = pages()->find("template=flyer-by-paper-prod");
$flyer = pages()->get("template=flyer-type");
//sticker
$sticker = pages()->get("template=sticker-type");
$stickerProducts = pages()->find("template=sticker-product");
//menu, poster, display
$menus = pages()->get("template=menu-type");
$posters = pages()->get("template=poster-type");
$displays = pages()->get("template=display-type");
//Văn phòng phẩm
$invitations = pages()->get("template=invitation-type");
$letterHead = pages()->get("template=letterhead-type");
//xử lý letter head
$letterHeadProducts = pages()->find("template=letterhead-type|letterhead-luxe");

$noteCards = pages()->get("template=notecard-type");
$greetingCards = pages()->get("template=greet_card-type");
$complimentSlips = pages()->get("template=complm_slip-type");

//xử lý bao thư: làm tiếp sau
$envelope = pages()->get("template=envelope-type");

//xử lý notebook: làm tiếp sau
$notebook = pages()->get("template=notebook-type");

//Dịch Vụ Doanh Nghiệp
$bizServiceList = PageArray();
foreach ($menuSettingPage->nav_menu_repeaters as $item) {
	if ($item->type == 'biz_service') {
		$bizServiceList->add($item);
	}
}

//$topMenuClassText = $vars['class'];
?>
<nav class="uk-navbar-container uk-flex-center" data-uk-navbar>
	<div class="uk-navbar-left">
		<div class="tw-logo site-name">
			<?= siteLogo() ?>
		</div>
	</div>
	<div class="uk-navbar-center">
		<ul class="tw-main-menu uk-visible@m">
			<li class="menu-item">
				<a href="<?= $home->url ?>"><?= $home->title ?></a>
				<?php
				?>
			</li>
			<li class="menu-item menu-item-has-children"><a href="<?= $danhThiep->url ?>"><?= $danhThiep->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<li class="menu-item menu-item-has-children"><a href="<?= $danhThiep->url ?>"><?= $danhThiep->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($bizCardsByPaperList as $item) {
							?>
								<li><a href="<?= $item->url_link ?>"><?= $item->title_line ?></a></li>
							<?php
							} ?>
							<li class="uk-nav-divider"></li>
							<?php
							foreach ($bizCardsByFinishList as $item) {
							?>
								<li><a href="<?= $item->url_link ?>"><?= $item->title_line ?></a></li>
							<?php
							} ?>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children"><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Danh Thiếp Vuông</a>
						<ul class="sub-menu uk-animation-fade">
							<li><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Vuông Nguyên Bản</a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Vuông Gân Chạm</a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Vuông Siêu Hạng</a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Vuông Tỏa Sáng</a>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children"><a href="<?= $danhThiep->url . "/danh-thiep-mini/" ?>">Danh Thiếp Mini</a>
						<ul class="sub-menu uk-animation-fade">
							<li><a href="<?= $danhThiep->url . "/danh-thiep-mini/" ?>">Mini Nguyên Bản</a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-mini/" ?>">Mini Tỏa Sáng</a>
						</ul>
					</li>
					<li class="uk-nav-divider"></li>
					<li><a href="<?= $danhThiep->url ?>">Tất Cả Danh Thiếp</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--danh thiếp HẾT-->

			<!--ấn phẩm marketing-->
			<li class="menu-item  menu-item-has-children"><a href="<?= $danhMktMat->url ?>"><?= $danhMktMat->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<li class="menu-item menu-item-has-children"><a href="<?= $buuThiep->url ?>"><?= $buuThiep->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($postCardBySizes as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>
							<li class="uk-nav-divider"></li>
							<?php
							foreach ($postCardByPapers as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children"><a href="<?= $flyer->url ?>"><?= $flyer->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($flyerBySizes as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>
							<li class="uk-nav-divider"></li>
							<?php
							foreach ($flyerByPapers as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children"><a href="<?= $sticker->url ?>"><?= $sticker->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($stickerProducts as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>

						</ul>
					</li>
					<li><a href="<?= $menus->url ?>"><?= $menus->title ?></a></li>
					<li><a href="<?= $posters->url ?>"><?= $posters->title ?></a></li>
					<li><a href="<?= $displays->url ?>"><?= $displays->title ?></a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="<?= $danhMktMat->url ?>">Tất Cả Ấn Phẩm MKT</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--ấn phẩm marketing HẾT-->

			<!--văn phòng phẩm-->
			<li class="menu-item  menu-item-has-children"><a href="<?= $stationery->url ?>"><?= $stationery->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<li class="menu-item menu-item-has-children"><a href="<?= $sticker->url ?>"><?= $sticker->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($stickerProducts as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
							<?php
							} ?>

						</ul>
					</li>
					<li><a href="<?= $invitations->url ?>"><?= $invitations->title ?></a></li>
					<li class="menu-item menu-item-has-children"><a href="<?= $letterHead->url ?>"><?= $letterHead->title ?></a>
						<ul class="sub-menu uk-animation-fade">
							<?php
							foreach ($letterHeadProducts as $item) {
							?>
								<li><a href="<?= $item->url ?>"><?= $item->name_alias ?></a></li>
							<?php
							} ?>

						</ul>
					</li>
					<li><a href="<?= $noteCards->url ?>"><?= $noteCards->title ?></a></li>
					<li><a href="<?= $greetingCards->url ?>"><?= $greetingCards->title ?></a></li>
					<li><a href="<?= $complimentSlips->url ?>"><?= $complimentSlips->title ?></a></li>
					<li><a href="<?= $envelope->url ?>"><?= $envelope->title ?></a></li>
					<li><a href="<?= $notebook->url ?>"><?= $notebook->title ?></a></li>

					<li class="uk-nav-divider"></li>
					<li><a href="<?= $stationery->url ?>">Tất Cả VPP</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--văn phòng phẩm HẾT-->

			<li class="menu-item  menu-item-has-children"><a href="<?= $bizService->url ?>"><?= $bizService->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<?php
					foreach ($bizServiceList as $item) {
					?>
						<li><a href="<?= $item->url_link ?>"><?= $item->title_line ?></a></li>
					<?php
					} ?>
				</ul>
			</li>
			<li class="menu-item">
				<a href="<?= $question->url ?>"><?= $question->title ?></a>
			</li>


		</ul>
	</div>


	<!-- các nav right  ...-->
	<div class="uk-navbar-right">
		<div class="tw-header-meta">
		</div>
		<a class="mobile-menu uk-navbar-toggle uk-hidden@m" href="#" data-uk-toggle="target: #mobile-menu-modal"><i class="ion-navicon-round"></i></a>
	</div>

	<!-- mobile menu -->
	<div id="mobile-menu-modal" class="uk-modal-full" data-uk-modal>
		<div class="uk-modal-dialog">
			<button class="uk-modal-close-full" type="button" data-uk-close></button>
			<div class="uk-light uk-height-viewport tw-mobile-modal uk-flex uk-flex-middle uk-flex-center" data-uk-scrollspy="target:>ul>li,>div>a; cls:uk-animation-slide-bottom-medium; delay: 150;">
				<ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
					<li class="uk-parent"><a href="#"><?= $danhThiep->title ?></a>
						<ul class="uk-nav-sub">
							<li><a href="<?= $danhThiep->url ?>"><?= $buuThiep->title ?></a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-vuong/" ?>">Danh Thiếp Vuông</a>
							<li><a href="<?= $danhThiep->url . "/danh-thiep-mini/" ?>">Danh Thiếp Mini</a>
							<li class="uk-nav-divider"></li>
							<li><a href="<?= $danhThiep->url ?>">Tất Cả Danh Thiếp</a></li>
							<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?= $danhMktMat->url ?>"><?= $danhMktMat->title ?></a>
						<ul class="uk-nav-sub">
							<li><a href="<?= $buuThiep->url ?>"><?= $buuThiep->title ?></a></li>
							<li><a href="<?= $flyer->url ?>"><?= $flyer->title ?></a></li>
							<li><a href="<?= $sticker->url ?>"><?= $sticker->title ?></a></li>
							<li><a href="<?= $menus->url ?>"><?= $menus->title ?></a></li>
							<li><a href="<?= $posters->url ?>"><?= $posters->title ?></a></li>
							<li><a href="<?= $displays->url ?>"><?= $displays->title ?></a></li>
							<li class="uk-nav-divider"></li>
							<li><a href="<?= $danhMktMat->url ?>">Tất Cả Ấn Phẩm MKT</a></li>
							<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?= $stationery->url ?>"><?= $stationery->title ?></a>
						<ul class="uk-nav-sub">
							<li><a href="<?= $sticker->url ?>"><?= $sticker->title ?></a></li>
							<li><a href="<?= $invitations->url ?>"><?= $invitations->title ?><span class="uk-label">Hot</span></a></li>
							<li><a href="<?= $letterHead->url ?>"><?= $letterHead->title ?></a></li>
							<li><a href="<?= $noteCards->url ?>"><?= $noteCards->title ?></a></li>
							<li><a href="<?= $greetingCards->url ?>"><?= $greetingCards->title ?></a></li>
							<li><a href="<?= $complimentSlips->url ?>"><?= $complimentSlips->title ?><span class="uk-label">Hot</span></a></li>
							<li><a href="<?= $envelope->url ?>"><?= $envelope->title ?></a></li>
							<li><a href="<?= $notebook->url ?>"><?= $notebook->title ?></a></li>
							<li><a href="<?= $stationery->url ?>">Tất Cả VPP</a></li>
							<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="<?= $bizService->url ?>"><?= $bizService->title ?></a>
						<ul class="uk-nav-sub">
							<?php
							foreach ($bizServiceList as $item) {
							?>
								<li><a href="<?= $item->url_link ?>"><?= $item->title_line ?></a></li>
							<?php
							} ?>
						</ul>
					</li>

				</ul>
				<div class="tw-socials tw-socials-minimal">
					<a href="#"><i class="ion-social-facebook"></i></a>
					<a href="#"><i class="ion-social-twitter"></i></a>
					<a href="#"><i class="ion-social-pinterest"></i></a>
				</div>
			</div>
		</div>
	</div>
</nav>