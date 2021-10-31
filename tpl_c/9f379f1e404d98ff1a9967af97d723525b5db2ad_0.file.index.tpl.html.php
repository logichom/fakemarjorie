<?php
/* Smarty version 3.1.39, created on 2021-10-13 17:19:42
  from '/Users/logichom/project/fakemarjorie/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166f90e6d67a1_92056021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f379f1e404d98ff1a9967af97d723525b5db2ad' => 
    array (
      0 => '/Users/logichom/project/fakemarjorie/index.tpl.html',
      1 => 1634138378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6166f90e6d67a1_92056021 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="zh-Hant-TW">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width,initial-scale=0.7,maximum-scale=1.0,user-scalable=0">
        <meta name="description" content="Marjorie(瑪裘瑞)小姐表示每天打扮自己是最開心的事台灣新生代女裝品牌，Marjorie風格強烈，品牌風格復古摩登又帶有個性感。Marjorie的風格擅長把中性帥氣的隨性感加入細節裡，在服裝中也常發現擁有淘氣調性的小華麗，每個女孩穿上 Marjorie獨創服飾都能詮釋出屬於自己的味道！" />
        <title>Marjorie</title>
        <!-- Favicone Icon -->
	    <link rel="shortcut icon" type="image/x-icon" href="/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">
	    <link rel="icon" href="/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">
	    <link rel="apple-touch-icon" href="/template/marjorie_tpl/assets/img/Marjorie-logo.jpg">
        <!-- CSS -->
        <link href="/template/marjorie_tpl/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="/template/marjorie_tpl/assets/css/style.css?v=1" rel="stylesheet" type="text/css" />
        <link href="/template/marjorie_tpl/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="/template/marjorie_tpl/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
        <link href="/template/marjorie_tpl/assets/css/plugin/animate.css" rel="stylesheet" type="text/css" />
        <link href="/template/marjorie_tpl/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />
        <!-- Theme CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet">
        <link href="/resources/fullpage.css" rel="stylesheet" />
    </head>
    <body class="bg-light">

        <!-- Preloader -->
        <section id="preloader">
            <div class="loader" id="loader">
                <div class="loader-img"></div>
            </div>
        </section>
        <!-- End Preloader -->

        <!-- Sidebar Menu -->
        <div class="sidebar-menu">
            <div class="sidembar-menu-wrap">
                <a href="javascript:void(0)" class="sidebar-close-icon icon--close">
                    <i class="ion ion-android-close"></i>
                </a>
                <!--Sidebar Content-->
                <div class="sidebar-content">
                    <h5 class="white">Sign In</h5>
                    <form role="search" id="searchform" action="/search" method="get" class="sign-in">
                        <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
                        <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
                        <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
                        <a>New Customer?</a>
                    </form>
                    <ul>
                        <li><a class="all-demos-link" target="_blank" href="../demo.html">Main Demo Page</a></li>
                        <li><a href="home.html">Home Default</a></li>
                        <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
                        <li><a href="login-register.html">Login & Signup</a></li>
                        <li><a href="faq-1.html">FAQ</a></li>
                        <li><a href="about-1.html">About</a></li>
                        <li><a href="service-1.html">Service</a></li>
                        <li><a href="blog-grid-3col.html">Blog</a></li>
                        <li><a href="404-error-1.html">404 Error</a></li>
                        <li><a href="shop-checkout.html">Shopping Cart</a></li>
                        <li><a href="contact-1.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar Menu -->

        <!-- Site Wraper -->
	    <div class="wrapper">

            <header id="header" class="header header--dark header-transparent header--sticky">
                <!-- Nav Bar -->
                <nav id="navigation" class="header-nav">
                    <div class="container">
                        <div class="row d-flex flex-md-row align-items-center">
                            <div class="logo mr-auto">
                                <!--logo-->
                                <a href="/">
                                    <img class="logo-dark" src="/template/marjorie_tpl/assets/img/logo.png" alt="Mazel" />
                                    <img class="logo-light" src="/template/marjorie_tpl/assets/img/logo.png" alt="Mazel" />
                        </a>
                                    <!--End logo-->
                            </div>

                            <div class="nav-menu ml-auto">
                                <ul class="">
                                    <li class="nav-menu-item">
                                        <a href="#" class="nav-sale blink" style="color:#b25b52"></a>
                                    </li>
                                    <li class="nav-menu-item">
                                        <a href="/store/storelist.php" class="nav-new " style="color:#000"></a>
                                        <div class="nav-dropdown ">
                                            <ul>
                                                <li><a href="/store/storelist.php?gr=250">本週新品</a></li>
                                                <li><a href="/store/storelist.php?gr=245">復古提案王</a></li>
                                                <li><a href="/store/storelist.php?gr=243">REFINE重生系列</a></li>
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
                                                <li><a href="/store/storelist.php?ded=13,14">下身</a></li>
                                                <li><a href="/store/storelist.php?ded=4,5">洋裝</a></li>
                                                <li><a href="/store/storelist.php?ded=20">連身褲</a></li>
                                                <li><a href="/store/storelist.php?ded=8">外套</a></li>
                                                <li><a href="/store/storelist.php?ded=15">帽子</a></li>
                                                <li><a href="/store/storelist.php?ded=16,17,18,19">鞋子</a></li>
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
            </header> 
            <!-- End Header -->

            <div id="fullpage">
                <?php echo $_smarty_tpl->tpl_vars['test']->value;?>

                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php?ed=all">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_701633509427.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/701633509427.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php?ed=all">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_691632974035.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/691632974035.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_591632364185.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/591632364185.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_601632364883.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/601632364883.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_621632365203.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/621632365203.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_611632365161.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/611632369835.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_631632365473.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/631632365473.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_641632365793.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/641632365793.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_651632365822.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/651632369852.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_661632365951.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/661632365951.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_671632366056.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/671632369865.jpeg" />
                    </picture>
                </div>
                <div class="section bg-image light-color" data-url="https://www.marjorie.co/store/storelist.php">
                    <picture>
                        <source srcset="https://img.marjorie.co/index/m_681632366159.jpeg" media="(max-width: 1200px)">
                        <img src="https://img.marjorie.co/index/681632376635.jpeg" />
                    </picture>
                </div>
            </div>
        </div>
	</div>

    <?php echo '<script'; ?>
 src="/resources/fullpage.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
            $('.section').click(function() {
                let url = $(this).data('url') ? $(this).data('url') : '/store/storelist.php?ed=all';
                location.href = url;
            });

            $('#fullpage').fullpage({
                // anchors: ['section-a', 'section-b', 'section-c', 'section-d'],
                // sectionsColor: ['#C63D0F', '#fff', '#1BBC9B', '#ffffff'],
                navigation: true,
                navigationPosition: 'right',
                // navigationTooltips: ['First page', 'Second page', 'Third page', 'fourth page'],
                slidesNavigation: true,
                // controlArrows: false,
                // responsive: 900
            });
        });
	<?php echo '</script'; ?>
>

    </body>
</html><?php }
}
