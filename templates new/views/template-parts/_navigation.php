<?php

namespace ProcessWire;

// get home page and home childrens
$root = pages('/')->and(pages()->find("template=biz_card-type|mkt-materials|business-services|about"));

$home = pages('/');
$productTypes = pages()->get("template=product-type");
$albumAnh = pages()->get("/album-anh/");
$albumAnhItems = $albumAnh->children;

$tranhAnh = pages()->get("/tranh-anh/");
$tranhAnhItems = $tranhAnh->children;
$phuKienTrinhBay = pages()->get("/phu-kien-trinh-bay/");
$phuKienTrinhBayItems = $phuKienTrinhBay->children;

$prices = pages()->get("template=prices");
$pricesItems = $prices->children;

$thietKe = pages()->get("template=design-page");
$thietKeItems = $thietKe->children;

$ve123in = pages()->get("/123in-photo/");
$ve123inItems = $ve123in->children;

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
			<li class="menu-item menu-item-has-children"><a href="<?= $albumAnh->url ?>"><?= $albumAnh->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<?php
					foreach ($albumAnhItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>

					<li class="uk-nav-divider"></li>
					<li><a href="<?= $albumAnh->url ?>">Tất Cả Album Ảnh</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--Album HẾT-->

			<!--Tranh ảnh-->
			<li class="menu-item menu-item-has-children"><a href="<?= $tranhAnh->url ?>"><?= $tranhAnh->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<?php
					foreach ($tranhAnhItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>

					<li class="uk-nav-divider"></li>
					<li><a href="<?= $tranhAnh->url ?>">Tất Cả Tranh Ảnh</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--tranh ảnh HẾT-->

			<!--phụ kiện & trình bày-->
			<li class="menu-item menu-item-has-children"><a href="<?= $phuKienTrinhBay->url ?>"><?= $phuKienTrinhBay->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<?php
					foreach ($phuKienTrinhBayItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>

					<li class="uk-nav-divider"></li>
					<li><a href="<?= $phuKienTrinhBay->url ?>">Tất Cả Phụ Kiện & Trình Bày</a></li>
					<li class="uk-nav-divider"></li>
					<li><a href="/tat-ca-san-pham/">Tất Cả Sản Phẩm</a></li>
				</ul>
			</li>
			<!--phụ kiện & trình bày HẾT-->
			<!--về giá-->
			<li class="menu-item  menu-item-has-children"><a href="<?= $prices->url ?>"><?= $prices->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<li><a href="<?= $prices->url ?>"><?= $prices->title ?></a></li>
					<?php
					foreach ($pricesItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>
				</ul>
			</li>
			<!--về Thiết kế-->
			<li class="menu-item  menu-item-has-children"><a href="<?= $thietKe->url ?>"><?= $thietKe->title ?></a>
				<ul class="sub-menu uk-animation-fade">
					<li><a href="<?= $thietKe->url ?>"><?= "Mẹo Thiết Kế" ?></a></li>
					<?php
					foreach ($thietKeItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>
				</ul>
			</li>

			<!--về 123in-->
			<li class="menu-item  menu-item-has-children"><a href="<?= $ve123in->url ?>"><?= $ve123in->title ?></a>
				<ul class="sub-menu uk-animation-fade">

					<?php
					foreach ($ve123inItems as $item) {
					?>
						<li><a href="<?= $item->url ?>"><?= $item->title ?></a></li>
					<?php
					} ?>
				</ul>
			</li>

			<!--Hỏi và đáp-->
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