<?php

namespace ProcessWire;

/**
 * _main.php template file, called after a page’s template file
 *
 */

// reset variables
$img = $img_alt = '';

// Get First Image
if (page()->images && count(page()->images)) {
	$img = page()->images->first;
	$img_alt = $img->description ?: page()->title;
}
//kiểm template để kịp thời tạo class text cho menu
$navMenuClassText = "";
$templateName = $page->template;
switch ($templateName) {
	case "product":
		$navMenuClassText = "header-container tw-header";
		break;
	case "flyer-product":
		$navMenuClassText = "header-container tw-header";
		break;
	case "display-product":
		$navMenuClassText = "header-container tw-header";
		break;
	case "sticker-product":
		$navMenuClassText = "header-container tw-header";
		break;
	case "blog-post":
		$navMenuClassText = "header-container tw-header";
		break;
	default:
		$navMenuClassText = "header-container tw-header tw-header-transparent uk-light";
}
$ws_page = pages()->get('/web-settings/');
?>
<!DOCTYPE html>
<html lang="<?= setting('lang-code') ?>">

<head id='html-head'>
	<?php // site head
	echo siteHead();
	// echo gwCode( setting('gw-code') ); // Google Webmaster
	echo gaCode('53650294-3');
	//chat code
	echo $ws_page->w_settings_chat_code;
	?>
	<!-- head thêm theo theme -->
	<?php echo files()->render('views/template-parts/_head-of-theme.php') ?>
	<!-- head thêm theo theme End-->
</head>

<body id='html-body' class="loading">
	<div class="tw-preloader">
		<div data-uk-spinner>
		</div>
	</div>
	<!-- HEADER and NAVIAGION -->

	<div class="<?= $navMenuClassText ?>">

		<?php echo files()->render('views/template-parts/_navigation.php');  ?>
	</div>

	<!-- HEADER END -->

	<div class="main-container">


		<!-- CONTENT: nội dung thay thế bởi các trang -->
		<pw-region id="page-content">
		</pw-region>

		<!-- Đăng ký nhận tin -->
		<section id="sign-up-newsletter" pw-optional class="uk-section uk-padding-remove uk-background-muted">
			<div class="uk-container" data-uk-scrollspy="target: > div div; cls:uk-animation-slide-bottom-small; delay: 300;">
				<div class="tw-element tw-call-action uk-padding-remove">
					<div class="call-content">
						<h2>Đăng Ký Nhận Bản Tin</h2>
						<p>Chúng tôi sẽ gởi bản tin hàng tháng cho bạn</p>
					</div>
					<div class="call-btn">
						<?php include('./promailer-subscribe.php');	?>
					</div>
				</div>
			</div>
		</section>
		<!-- phần sign up newsletter p END -->
		<!-- FOOTER -->
		<footer id='footer' class="uk-section uk-padding-remove-vertical uk-light" style="background-color: #222222;">
			<div class="bottom-area">
				<div class="uk-container">
					<div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-medium" data-uk-grid data-uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 200;">
						<div>
							<!-- product list -->
							<?php echo files()->render('views/template-parts/_footer-prod-list.php'); ?>
						</div>

						<div>
							<!-- danh sách giấy -->
							<?php echo files()->render('views/template-parts/_footer-paper-stocks.php'); ?>
						</div>

						<div class="widget">
							<!-- về 123in -->
							<?php echo files()->render('views/template-parts/_footer-about-123in.php'); ?>
						</div>

						<div>
							<!-- liên kết hữu ích -->
							<?php echo files()->render('views/template-parts/_footer-useful-links.php'); ?>
						</div>
					</div>

				</div>
			</div>
			<div class="footer-area footer-small">
				<div class="uk-container">
					<div class="uk-flex-middle uk-child-width-1-1 uk-child-width-expand@m" data-uk-grid>
						<div class="copyright">
							<?php echo files()->render('views/template-parts/_footer-copyright.php'); ?>
						</div>
						<div class="uk-text-right">
							<a href="" data-uk-scroll>Trở lại Top &nbsp;&nbsp;<i class="ion-ios-arrow-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- offcanvas để đây -->

	<?php
	// echo googleFonts( ['fonts' => ['Nunito:200,600','Butcherman']] ); // Google Fonts
	echo gaCode(setting('ga-code')); // Google Analytics
	?>
	<!-- .main-container close -->
	<script src="<?= $urls->templates ?>assets/js/jquery-3.2.0.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/jquery.easypiechart.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/uikit.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/uikit-icons.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?= $urls->templates ?>assets/js/theme.js"></script>
</body>

</html>