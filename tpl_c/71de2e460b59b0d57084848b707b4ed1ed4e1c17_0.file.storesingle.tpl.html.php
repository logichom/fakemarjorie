<?php
/* Smarty version 3.1.39, created on 2021-10-31 08:31:59
  from '/Users/logichom/project/fakemarjorie/tpl/store/storesingle.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617e466f4c01f9_45939665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71de2e460b59b0d57084848b707b4ed1ed4e1c17' => 
    array (
      0 => '/Users/logichom/project/fakemarjorie/tpl/store/storesingle.tpl.html',
      1 => 1635665500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617e466f4c01f9_45939665 (Smarty_Internal_Template $_smarty_tpl) {
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
        //更新購物車內容
        $.ajax({
            type: 'GET',
            url: '/global/tempcart-reread.php',
            dataType: 'json',
            success: function(res) {
                if (res.code == 200) {
                    //Total
                    // $('#ShopCount').html(res.data.Total.Count);
                    $('#ShopTotalPrice').html(res.data.Total.Price);
                    $('#ShopcartIcon').attr('data-cart-items', res.data.Total.Count);
                    $('#ShopcartIconTabBar').attr('data-cart-items', res.data.Total.Count);
                    //List Data
                    let html_data = '';
                    res.data.List.forEach(function(element) {
                        html_data += '<li>' +
                            '           <a class="product-img" href="/store/storesingle.php?gid=' + element.goodsID + '&colorid=' + element.colorid + '">' +
                            '               <img src="' + element.dgoodsPicRename + '" alt="fashion">' +
                            '           </a>' +
                            '           <div class="product-content">' +
                            '               <a href="javascript:void(0)" class="product-remove" onclick="delShopcart(' + element.tempcartID + ')">' +
                            '                   <i class="ion ion-android-close"></i>' +
                            '               </a>' +
                            '               <a class="product-title">' + element.goodsName + '</a>' +
                            '               <div class="product-cart-collateral">' +
                            '                   <span class="qty-cart">' + element.howmanybuy + '</span><span>x</span><span class="product-price-amount color--dark"><span class="currency-sign">$</span>' + element.goodsSellprice + '</span>' +
                            '               </div>' +
                            '           </div>' +
                            '         </li>';
                    });


                    $('#ShopData').html(html_data);

                }


            },
        });

    }

    function getShopcartCount() {
        $.ajax({
            type: 'GET',
            url: '/global/tempcart-reread.php?data=count',
            dataType: 'json',
            success: function(res) {
                if (res.code == 200) {
                    //Total
                    $('#ShopCount').html(res.data.Total.Count);
                    $('#ShopcartIcon').attr('data-cart-items', res.data.Total.Count);
                    $('#ShopcartIconTabBar').attr('data-cart-items', res.data.Total.Count);
                }
            },
        });
    }

    function delShopcart(id) {
        $.ajax({
            type: 'POST',
            url: '/global/tempcart-drop.php',
            data: 'tarid=' + id,
            success: function(res) {
                // console.log(res)
                if (res) {
                    getShopcart();
                }
            },
        });
    }
	<?php echo '</script'; ?>
>
	<link href="https://www.marjorie.co/template/marjorie_tpl/assets/css/plugin/smoothproducts.css" rel="stylesheet" />
	<style>
		/* product */

		.goodsmenu-text {
			float: left;
			width: 100%;
			color: #666;
			line-height: 30px;
			margin-bottom: 10px;
		}

		.sizeList {
			font-size: 16px;
			float: left;
			width: 42px;
			height: 37px;
			display: block;
			padding: 5px;
			margin-right: 5px;
			text-align: center;
			color: #000;
			cursor: pointer;
			border: solid 1px #D1D2D1;
			background: rgb(255, 255, 255);
		}

		.sizeList.active {
			background: rgb(23, 35, 56);
			color: #fff;
		}

		.sizeList:hover {
			background: #BBAB91;
		}

		.colorItem.active {
			border-bottom: solid 2px #000;
			padding-bottom: 1px;
		}

		.try-report .table tr td,
		.try-report .table tr th {
			padding: 0;
		}

		.close {
			position: absolute;
			top: 1rem;
			right: 1rem;
			z-index: 1030;
			display: inline-flex;
		}

		.modal {
			top: 5rem;
		}

		.modal-header {
			justify-content: center;
		}

		.table tr td,
		.table tr th {
			white-space: nowrap;
		}

		.list-group-item {
			background-color: transparent;
			border: none;
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
							<ul class="">
								<li class="nav-menu-item">
									<a href="/store/storelist.php" class="nav-new " style="color:#000"></a>
									<div class="nav-dropdown ">
										<ul>
											<li><a href="/store/storelist.php?gr=251">本週新品</a></li>
											<li><a href="/store/storelist.php?gr=253">復古印花系列</a></li>
											<li><a href="/store/storelist.php?gr=242">wedding collection</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-menu-item">
									<a href="/store/storelist.php?ed=all " class="nav-all " style="color:#000"></a>
									<div class="nav-dropdown ">
										<ul>
											<li><a href="/store/storelist.php?ed=all">全系列</a></li>
											<li><a href="/store/storelist.php?ded=1">上衣</a></li>
											<li><a href="/store/storelist.php?ded=13">裙子</a></li>
											<li><a href="/store/storelist.php?ded=14">褲子</a></li>
											<li><a href="/store/storelist.php?ded=4,5">洋裝</a></li>
											<li><a href="/store/storelist.php?ded=20">連身褲</a></li>
											<li><a href="/store/storelist.php?ded=8">外套</a></li>
											<li><a href="/store/storelist.php?ded=16,17,18,19">鞋子</a></li>
											<li><a href="/store/storelist.php?ded=15">帽子</a></li>
											<li><a href="/store/storelist.php?ded=12">配件</a></li>
										</ul>
									</div>
								</li>
								<li class="nav-menu-item">
									<a href="/store/storelist.php?ed=spotzone" class="nav-stock "
										style="color:#000"></a>
								</li>
								<li class="nav-menu-item">
									<a href="/custompage/gallery_list.php" class="nav-blog " style="color:#000"></a>
								</li>
								<li class="nav-menu-item">
									<a href="/custompage/style_list.php" class="nav-gallery " style="color:#000"></a>
								</li>
								<li class="nav-menu-item">
									<a href="#" class="nav-about " style="color:#000"></a>
									<div class="nav-dropdown ">
										<ul>
											<li><a href="/about/about.php">品牌故事</a></li>
											<li><a href="/about/team.php">專業團隊</a></li>
											<li><a href="/about/boutiques.php">門市資訊</a></li>
										</ul>
									</div>
								</li>
							</ul>
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
                                                <img src="https://www.marjorie.co/template/marjorie_tpl/assets/img/product/02.jpg" alt="fashion">
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

		<!-- Shop Item Detail Section -->
		<section id="shop-item" class="ptb ptb-sm-80">
			<div class="container">
				<div class="row ">
					<!-- Shop Item -->
					<div class="col-md-6 mb-sm-60">
						<div class="shop-detail-item">
							<!--Item Images-->
							<div class="sp-wrap">
								<?php echo $_smarty_tpl->tpl_vars['itemImgList']->value;?>

							</div>
							<!-- End Item Images -->
						</div>
					</div>
					<!-- End Shop Item -->

					<!-- Shop info -->
					<div class="col-md-6">
						<div class="shop-detail-info">
							<h4><?php echo $_smarty_tpl->tpl_vars['itemTitle']->value;?>
</h4>
							<div class="shop-item-price mtb-15 ptb-15">
								<?php echo $_smarty_tpl->tpl_vars['itemPriceList']->value;?>

							</div>
							<hr />
							<p class="ptb-15"></p>
							<ul class="project-detail-block ptb-15">
								<?php echo $_smarty_tpl->tpl_vars['itemDetailList']->value;?>

							</ul>
							<div class="cart-box">
								<label class="inline" for="goodsnum">Qty :</label>
								<input type="number" id="goodsnum" name="goodsnum" value="1" max="10" min="1" class="input-lg" required="required" />
                            </div>
							<a class="btn btn-lg btn-black" onclick="add_tocart(0)"><i class="fa fa-shopping-cart left"></i>加入購物車</a>
							<a class="btn btn-lg btn-secondary" onclick="add_tocart(1)"><i class="fa fa-shopping-cart left"></i>立即結帳</a>
								
							<!-- Tab -->
							<div class="tabs mt-15">
								<ul>
									<li><a href="#tabs-1">商品資訊</a></li>
									<li><a href="#tabs-2">購買需知</a></li>
								</ul>

								<div class="ui-tab-content">
									<div id="tabs-1">
										<div class="list-group list-group-sm list-group-flush-x" id="">
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body" data-toggle="collapse" href="#productCollapseInfo">
													<strong>商品資訊</strong>
												</a>
												<div class="collapse mt-3 show" id="productCollapseInfo" data-parent="#productCollapseInfo">
													<div class="row">
														<table class="table table-bordered table-sm table-hover table-responsive">
															<?php echo $_smarty_tpl->tpl_vars['itemInfoList']->value;?>

														</table>

														<p class="font-size-xs" style="letter-spacing: 2px;">
															貼心提醒：因每個人的身型皆不盡相同，在搭配不同尺寸之商品時，嬌小豐腴與高挑纖瘦的女孩們皆可能選擇同樣尺寸之商品。
															建議依照自己的身型做尺寸丈量與比對，數值將較為準確。
														</p>

														<p class="font-size-xs" style="letter-spacing: 2px;">
															尺寸表因每個人的測量方式不同以及布料彈性、水洗處理 等因素，因此尺寸與實際商品都會有些誤差
															，誤差2-3cm以內為正常範圍，請買家見諒。
															商品呈現顏色因電腦螢幕不同而有所差異，以實際色彩為準，介意色差買家請考慮清楚再下標。
															特別提醒：胸圍/袖口寬/下擺/腰圍/臀圍/褲管寬/大腿圍 以上品項丈量方式皆為一圈。
														</p>
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body" data-toggle="collapse"
													href="#productCollapseSize">
													<strong>試穿報告</strong>
												</a>
												<div class="collapse mt-3 show" id="productCollapseSize"
													data-parent="#productCollapseParent">
													<div class="row">
														<div class="table-responsive">
															<table class="table table-bordered table-sm table-hover table-responsive">
																<?php echo $_smarty_tpl->tpl_vars['itemInfoListTry']->value;?>

															</table>
														</div>

														<p class="font-size-xs" style="letter-spacing: 2px;">
															貼心提醒：因每個人的身型皆不盡相同，在搭配不同尺寸之商品時，嬌小豐腴與高挑纖瘦的女孩們皆可能選擇同樣尺寸之商品。
															建議依照自己的身型做尺寸丈量與比對，數值將較為準確。
														</p>

														<p class="font-size-xs" style="letter-spacing: 2px;">
															尺寸表因每個人的測量方式不同以及布料彈性、水洗處理 等因素，因此尺寸與實際商品都會有些誤差
															，誤差2-3cm以內為正常範圍，請買家見諒。
															商品呈現顏色因電腦螢幕不同而有所差異，以實際色彩為準，介意色差買家請考慮清楚再下標。
															特別提醒：胸圍/袖口寬/下擺/腰圍/臀圍/褲管寬/大腿圍 以上品項丈量方式皆為一圈。
														</p>

													</div>
												</div>
											</div>
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body" data-toggle="collapse" href="#productCollapseShipping">
													<strong>模特兒資訊</strong>
												</a>
												<div class="collapse mt-3 show" id="productCollapseShipping" data-parent="#productCollapseParent">
													<div class="row">

														<div class="table-responsive">
															<table class="table table-bordered table-sm table-hover table-responsive">
																<?php if ($_smarty_tpl->tpl_vars['itemInfoListModel']->value) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemInfoListModel']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
																<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<?php }?>
															</table>
														</div>

														<p class="font-size-xs" style="letter-spacing: 2px;">
															尺寸表因每個人的測量方式不同以及布料彈性、水洗處理 等因素，因此尺寸與實際商品都會有些誤差
															，誤差2-3cm以內為正常範圍，請買家見諒。
															商品呈現顏色因電腦螢幕不同而有所差異，以實際色彩為準，介意色差買家請考慮清楚再下標。
															特別提醒：胸圍/袖口寬/下擺/腰圍/臀圍/褲管寬/大腿圍 以上品項丈量方式皆為一圈。
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="tabs-2">
										<div class="list-group list-group-sm list-group-flush-x" id="">
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body" data-toggle="collapse" href="#productCollapseSizing">
													<strong>尺寸丈量</strong>
												</a>
												<div class="collapse mt-3 show" id="productCollapseSizing" data-parent="#productCollapseParent">
													<div class="row">
														<img class="img-fluid" src="https://www.marjorie.co/template/ladymint_tpl/assets/img/demo/sizeInfo.jpg">
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body" data-toggle="collapse" href="#A1" aria-expanded="true">
													<strong>購買需知</strong>
												</a>
												<div class="collapse mt-3 show" id="A1"
													data-parent="#productCollapseBBB">
													<div class="row px-5" style="display: block;">
														商品實際顏色因個人電腦螢幕顯示不同而有所差異，購買前務必考慮清楚；每項商品頁面皆有清楚標示尺寸，若對尺寸存有疑慮，建議不要下標。<br><br>
														成立訂單後，請於三日內完成匯款，追加一律以付款並對到帳後算起14-45天（不包含例假日/國定假日）。因不同商品到貨日期皆不同，混搭購買需等商品到齊後一併寄出。現貨保留 3
														天，下標3天後未收到款項，則依匯款順序順位給下一位買家，追加到的現貨依匯款順序出貨。<br><br>
														商品製作到交貨需作業時間，若遇到布料不足、海關查扣..等其他因素，導致延遲出貨速度敬請見諒，若為現貨一定立即出貨，等待的同時對商品進度有任何疑問，歡迎買家詢問，
														若是無法接受有斷貨可能性的買家請勿購買。<br>
														<br>
														<span style="color:#7D1A1F;">使用便利超商交貨便的買家請注意：</span><br>
														1、 務必填寫真實姓名、手機號碼，以便貨到超商簡訊通知。<br>
														2、 <span style="color:#7D1A1F;">逾時超商指定取貨時間， 無人取件而被退回時，買家需自付郵資方可重新出貨。請盡買家之責，關心所購買包裹動態，切勿以「未收到簡訊」為理由。</span><br>
														3、 如未收到超商取件簡訊 ，請檢查填寫門市、手機號碼資料是否正確。亦或個人手機因素，煩請與該通訊業者確認 。<br>
														<br>
														建議登入會員後，查詢訂單相關出貨進度。<br>
														下標前請先詳閱購物須知，下標等同於同意遵守賣場所有規則，否則請勿下標。
													</div>
												</div>
											</div>
											<div class="list-group-item">
												<a class="d-block dropdown-toggle text-body"
													data-toggle="collapse" href="#A2">
													<strong>洗滌事項</strong>
												</a>
												<div class="collapse mt-3 show" id="A2"
													data-parent="#productCollapseBBB">
													<div class="row">
														<ol>
															<li>部分商品建議輕手洗，意指用手輕搓揉、沖水洗淨，勿浸泡、機洗，以延長商品壽命。</li>
															<li>商品洗滌及脫水時，建議使用洗衣袋，避免衣物變形。</li>
															<li>商品晾曬時，建議吊掛陰乾，儘量避免使用烘乾機。</li>
															<li>異色拼接款式請送專業乾洗，乾洗有分多種洗劑，可諮詢專業洗滌店協助乾洗。</li>
															<li>深色款與淺色款商品，請務必分開洗滌，避免色移導致染色。</li>
															<li> 洗滌時請勿使用漂白水、強力洗滌劑，避免掉色及染色。</li>
															<li>第一次清洗若有些許染料轉移至水中，屬正常現象，勿浸泡過久。</li>
															<li>植絨材質經洗滌後，絨絮剝落屬正常現象。</li>
															<li> 原色布料、牛仔丹寧類產品，易有顏色轉移現象，穿搭時請勿著淺色衣物、勿搭配淺色包包。
															</li>
															<li>原色布料產品，洗滌方式請送 專業乾洗 或
																單獨輕手洗滌；請勿浸泡，此類商品洗滌褪色屬正常現象。</li>
															<li>牛仔丹寧類產品，洗滌方式請
																自行單獨清洗，請勿與淺色衣物共同洗滌，此類商品洗滌褪色屬正常現象。</li>
															<li>部分布料因材質本身可能經由摩擦或環境潮濕影響，而產深顏色轉移，穿搭時建議搭配深色衣物、深色配件品。
															</li>
															<li>所有洗滌注意事項除上述條件外，請遵照商品本身車縫之洗標方式進行洗滌。</li>
														</ol>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Tab -->

						</div>
					</div>
					<!-- End Shop info -->
				</div>
			</div>

		</section>
		<!-- End Shop Item Section -->

		<hr />

		<!-- Related Product Slider-->
		<section class="ptb ptb-sm-80">
			<div class="container">
				<div class="row text-center">
					<h4 class="col-12">MATCH ITEM</h4>
				</div>
				<div class="spacer-30"></div>
				<div class="row">
					<div class="owl-carousel item4-carousel nf-carousel-theme o-flow-hidden">
					</div>
				</div>
			</div>
		</section>
		<!-- End Related Product Slider -->

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

	<!-- <?php echo '<script'; ?>
>
    //購物車內容物數量
    getShopcartCount();
    //彈出視窗+flickity
    $('#modalNewsletterHorizontal').on('shown.bs.modal', function(event) {
        $('.gallery').flickity('resize');
    });
    //第一次跑頁面，公告要彈出視窗 $Bulletin公告數量
    <?php echo '</script'; ?>
> -->
	<?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/smoothproducts.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(window).load(function() {
        $('.sp-wrap').smoothproducts();
    });

    //size choose
    $('.sizeList').click(function() {
        $('.sizeList').removeClass('active');
        $(this).addClass('active');
    })

    //移除body底色
    // $("body").removeClass("bg-light");
    //購物車
    function add_tocart(isbuynow) {
        var goodsid = 5244; //商品
        var colorid = 1; //顏色
        var sizeid = $('.sizeList.active').val();
        var goodsnum = $('#goodsnum').val(); //數量
        if (colorid > 0 && sizeid > 0 && goodsnum > 0) {
            alert('提醒您這是釣魚網站！要購買請到原始網站，謝謝！')
        } else {
            alert('請選擇尺寸，再加入購物車');
        }
    }
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
