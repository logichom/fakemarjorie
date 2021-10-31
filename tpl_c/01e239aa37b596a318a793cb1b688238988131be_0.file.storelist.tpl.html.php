<?php
/* Smarty version 3.1.39, created on 2021-10-31 08:56:56
  from '/Users/logichom/project/fakemarjorie/tpl/store/storelist.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617e4c48d35b43_60913560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e239aa37b596a318a793cb1b688238988131be' => 
    array (
      0 => '/Users/logichom/project/fakemarjorie/tpl/store/storelist.tpl.html',
      1 => 1635666003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617e4c48d35b43_60913560 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="zh-Hant-TW">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width,initial-scale=0.7,maximum-scale=1.0,user-scalable=0">
	<meta name="description" content="Marjorie(瑪裘瑞)小姐表示每天打扮自己是最開心的事台灣新生代女裝品牌，Marjorie風格強烈，品牌風格復古摩登又帶有個性感。Marjorie的風格擅長把中性帥氣的隨性感加入細節裡，在服裝中也常發現擁有淘氣調性的小華麗，每個女孩穿上 Marjorie獨創服飾都能詮釋出屬於自己的味道！" />

    <!-- Favicone Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="https://www.marjorie.co/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">
	<link rel="icon" href="https://www.marjorie.co/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">
	<link rel="apple-touch-icon" href="https://www.marjorie.co/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">

	<!-- CSS -->
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/style.css?v=1" rel="stylesheet" type="text/css" />
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/plugin/animate.css" rel="stylesheet" type="text/css" />
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- Theme CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet">
	
	<title>Marjorie</title>
</head>
<body class="bg-light">
	<style>
		.modal-full .modal-content .carousel-inner>.carousel-item img {
			max-width: 750px;
			max-height: 500px;
			display: block;
			width: auto;
		}

		.close {
			position: absolute;
			color: #fff;
			font-size: 3rem;
			font-weight: 400;
			top: -48px;
			right: 0;
		}

		#bulletin_modal .text-center {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.modal-content {
			/* background-color: rgba(0, 255, 0, 0); */
			border: none;
		}

		@media (max-width: 1200px) {
			.modal-full .modal-content .carousel-inner>.carousel-item img {
				max-width: 500px;
			}

			.close {
				right: 38px;
			}

		}
	</style>
	<!-- Newsletter: Horizontal -->
	<div class="modal modal-full fade" id="bulletin_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 750px;">
			<div class="modal-content">
				<div class="modal-body text-center p-0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
					<div style="height: 200px;line-height: 200px; text-align: center; background-color: white;">目前無公告
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Password Reset -->
	<div class="modal fade" id="modalPasswordReset" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<i class="fe fe-x" aria-hidden="true"></i>
            	</button>
				<div class="modal-header line-height-fixed font-size-lg">
					<strong class="mx-auto">忘記密碼</strong>
				</div>
				<div class="modal-body text-center">
					<form method="post" action="/member/forgetpwdm.php">
						<div class="form-group">
							<label class="sr-only" for="modalPasswordResetEmail">
                            Email Address *
                        	</label>
							<input class="form-control form-control-sm" id="mails" name="mails" type="email" placeholder="Email Address *" required>
                    	</div>
						<button class="btn btn-sm btn-primary">
							忘記密碼
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
>
	function getShopcart() {
		alert('提醒您這是釣魚網站！要購買請到原始網站，謝謝！')
    }
	<?php echo '</script'; ?>
>

	<style>
		.banner {
			background-image: url('');
		}

		.soldout img:nth-child(1) {
			position: absolute;
			z-index: 10;
		}

		.soldout img:nth-child(2) {
			opacity: 0.55;
		}

		@media (max-width: 991px) {
			.banner {
				background-image: url('');
				/* object-fit: cover;
            	height: -webkit-fill-available; */
			}
		}
	</style>
	<!-- Site Wraper -->
	<div class="wrapper">

		<!-- Header ("header--dark", "header-transparent", "header--sticky")-->
		<style>
			/* content-change */

			.nav-menu-item .nav-new:before {
				content: 'NEW ITEMS';
			}

			.nav-menu-item .nav-new:hover:before {
				content: '最新商品';
			}

			.nav-menu-item .nav-all:before {
				content: 'ALL ITEMS';
			}

			.nav-menu-item .nav-all:hover:before {
				content: '全系列商品';
			}

			.nav-menu-item .nav-stock:before {
				content: 'IN  STOCK';
			}

			.nav-menu-item .nav-stock:hover:before {
				content: '現貨商品';
			}

			.nav-menu-item .nav-gallery:before {
				content: 'GALLERY';
			}

			.nav-menu-item .nav-gallery:hover:before {
				content: '形象特輯';
			}

			.nav-menu-item .nav-blog:before {
				content: 'BLOG';
			}

			.nav-menu-item .nav-blog:hover:before {
				content: ' 專欄';
			}

			.nav-menu-item .nav-about:before {
				content: 'ABOUT';
			}

			.nav-menu-item .nav-about:hover:before {
				content: '關於我們';
			}

			.nav-menu-item .nav-sale:before {
				content: 'SALE';
			}

			.nav-menu-item .nav-sale:hover:before {
				content: '最新活動';
			}

			.nav-menu-item .nav-svip:before {
				content: 'SVIP';
			}

			.nav-menu-item .nav-svip:hover:before {
				content: '黑鑽專區';
			}

			.blink {
				animation: fade 1500ms infinite;
				-webkit-animation: fade 1500ms infinite;
			}

			@keyframes fade {
				from {
					opacity: 1.0;
				}

				50% {
					opacity: 0.4;
				}

				to {
					opacity: 1.0;
				}
			}

			@-webkit-keyframes fade {
				from {
					opacity: 1.0;
				}

				50% {
					opacity: 0.4;
				}

				to {
					opacity: 1.0;
				}
			}
		</style>
		<header id="header" class="header header--dark header-transparent header--sticky">
			<!-- Nav Bar -->
			<nav id="navigation" class="header-nav">
				<div class="container">
					<div class="row d-flex flex-md-row align-items-center">
						<div class="logo mr-auto">
							<!--logo-->
							<a href="/">
								<img class="logo-dark" src="https://www.marjorie.co/template/marjorie_tpl/assets/img/logo.png" alt="Mazel" />
								<img class="logo-light" src="https://www.marjorie.co/template/marjorie_tpl/assets/img/logo.png" alt="Mazel" />
                    		</a>
							<!--End logo-->
						</div>

						<div class="nav-menu ml-auto">
							<?php echo $_smarty_tpl->tpl_vars['titleList']->value;?>

						</div>
						<div class="nav-icons">
							<div class="nav-icon-item d-lg-none">
								<span class="nav-icon-trigger menu-mobile-btn align-middle"><i class="ion"></i></span>
							</div>
							<div class="nav-icon-item">
								<span class="nav-icon-trigger search-menu_btn align-middle"><i class="ion ion-ios-search"></i></span>
								<div class="search-menu-bar">
									<form action="/store/storelist.php">
										<input class="seach-input input--sm form-full" id="seach_input" name="kw" placeholder="Please Enter Keywords" type="search" />
                            		</form>
								</div>
							</div>

							<div class="nav-icon-item">
								<span class="nav-icon-trigger cart-menu_btn align-middle" onclick="getShopcart()"><i class="ion ion-ios-cart-outline"></i></span>
								<div class="cart-menu-bar">
									<ul class="cart-menu-list" id="ShopData">
										<li>
											<!-- <a class="product-img">
                                                <img src="/template/marjorie_tpl/assets/img/product/02.jpg" alt="fashion">
                                            </a> -->
											<div class="product-content">
												<a href="javascript:void(0)" class="product-remove">
													<i class="ion ion-android-close"></i>
												</a>
												<a class="product-title">Digital Trending Z Camera</a>
												<div class="product-cart-collateral">
													<span class="qty-cart">1</span><span>x</span><span class="product-price-amount color--dark"><span class="currency-sign">$</span>0.00</span>
												</div>
											</div>
										</li>
									</ul>
									<p class="lead dark cart-total">
										<span>加總</span>
										<span class="float-right" id="ShopTotalPrice"><span class="currency-sign">$</span>0</span>
									</p>
									<a class="btn btn-xs btn-color-b form-full" href="/check/checkorder.php">結帳</a>
								</div>
							</div>

							<div class="nav-icon-item">
								<a class="nav-icon-trigger align-middle"
									href="/member/memberlist.php"><i class="ion ion-android-person"></i></a>
							</div>

						</div>
					</div>
				</div>
			</nav>
			<!-- End Nav Bar -->
		</header> <!-- End Header -->

		<!-- CONTENT --------------------------------------------------------------------------------->
		<!-- Shop Item Section -->
		<section id="shop-item" class="ptb ptb-sm-80">
			<div class="container">
				<!-- Shop Item -->
				<div class="row container-grid">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<div class="nf-item col-md-6 col-sm-6 mb-30">
						<div class="item-box">
							<!-- Shop item images -->
							<?php echo $_smarty_tpl->tpl_vars['item']->value['imgs'];?>

							<!-- End Shop item images -->

							<!-- Shop item info -->
							<div class="shop-item-info">
								<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
									<h6 class="shop-item-name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h6>
								</a>
								<div class="shop-item-price"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></div>
							</div>
							<!-- Shop item info -->
						</div>
					</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<!-- End Shop Item -->

				<!-- Pagination Nav -->
				<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

				<!-- End Pagination Nav -->
			</div>
		</section>
		<!-- End Shop Item Section -->
		<hr />

		<!-- FOOTER -->
		<style>
			.footer-info .footer-about:before {
				content: 'About Marjorie';
			}

			.footer-info .footer-about:hover:before {
				content: '關於 Marjorie';
			}

			.footer-info .footer-Team:before {
				content: 'Our Team';
			}

			.footer-info .footer-Team:hover:before {
				content: '專業團隊';
			}

			.footer-info .footer-locations:before {
				content: 'Locations';
			}

			.footer-info .footer-locations:hover:before {
				content: '門市資訊';
			}

			.footer-info .footer-work:before {
				content: 'Work With Us';
			}

			.footer-info .footer-work:hover:before {
				content: '加入我們';
			}

			.footer-info .footer-privacy:before {
				content: 'Privacy Policy';
			}

			.footer-info .footer-privacy:hover:before {
				content: '隱私權條款';
			}

			.footer-info .footer-Service:before {
				content: 'After Service';
			}

			.footer-info .footer-Service:hover:before {
				content: '售後服務';
			}

			.footer-info .footer-buy:before {
				content: 'How To Buy';
			}

			.footer-info .footer-buy:hover:before {
				content: '如何購買';
			}

			.footer-info .footer-FAQ:before {
				content: 'FAQ';
			}

			.footer-info .footer-FAQ:hover:before {
				content: '常見問題';
			}

			.footer-info {
				justify-content: center;
			}

			.footer {
				background-color: #172338;
			}

			.footer .footer-info p,
			.footer a,
			.footer h6 {
				color: #fff;
			}
		</style>
		<footer class="footer">
			<div class="ptb-60">
				<div class="container">
					<!--Footer Info -->
					<div class="row footer-info">
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="footer-block">
								<a class="footer-logo mb-25" href="home.html">
									<img src="https://www.marjorie.co/template/marjorie_tpl/assets/img/logo2.png" />
                        		</a>
									<p>The happiest thing in the world is to dress myself up.- Miss Marjorie</p>
									<ul class="social">
										<li><a target="_blank"
												href="https://www.instagram.com/marjorie_official/"><i class="fa fa-instagram"></i></a>
										</li>
										<li><a target="_blank"
												href="https://www.facebook.com/tw.marjorie"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a target="_blank"
												href="https://www.youtube.com/channel/UCeKc2EKW3vVnCmzizX6mBAw"><i class="ion ion-social-youtube"></i></a>
										</li>
									</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4">
							<div class="footer-block">
								<h6 class="link-title">Company</h6>
								<ul class="link">
									<li><a href="/about/about.php" class="footer-about"></a></li>
									<li><a href="/about/team.php" class="footer-Team"></a></li>
									<li><a href="/about/boutiques.php" class="footer-locations"></a></li>
									<li><a target="_blank" href="https://www.104.com.tw/company/oepjp5s"
											class="footer-work"></a></li>
									<li><a target="_blank" href="/content/privacy.php" class="footer-privacy"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-4">
							<div class="footer-block">
								<h6 class="link-title">Service</h6>
								<ul class="link">
									<li><a href="/about/howtobuy.php?tabs=8" class="footer-Service"></a></li>
									<li><a href="/about/howtobuy.php?tabs=1" class="footer-buy"></a></li>
									<li><a href="/about/howtobuy.php?tabs=10" class="footer-FAQ"></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="footer-block">
								<h6 class="link-title">Contact</h6>
								<p>週一至週五10:00-18:00</p>
								<ul class="link">
									<li><a
											href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>service@marjorie.co</a>
									</li>
									<li><a><i class="fa fa-phone left"></i>04-22290227 | 12-13休息時間</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Footer Info -->
				</div>
			</div>

			<!-- Copyright Bar -->
			<section class="copyright pb-60">
				<div class="container">
					<p class="">
						COPYRIGHT © 2015 MARJORIE.CO LTD ALL RIGHTS RESERVED.
					</p>
				</div>
			</section>
			<!-- End Copyright Bar -->

		</footer> <!-- END FOOTER -->

		<!-- Scroll Top -->
		<a class="scroll-top">
			<i class="fa fa-angle-double-up"></i>
		</a>
		<!-- End Scroll Top -->

	</div>
	<!-- Site Wraper End -->
	
	<!-- JS -->
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/jquery-1.11.2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.easing.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.flexslider.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.fitvids.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.viewportchecker.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.stellar.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/wow.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.colorbox-min.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/owl.carousel.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.fs.tipper.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/mediaelement-and-player.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/theme.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
