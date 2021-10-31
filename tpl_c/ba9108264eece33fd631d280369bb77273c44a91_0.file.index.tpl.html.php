<?php
/* Smarty version 3.1.39, created on 2021-10-31 09:04:07
  from '/Users/logichom/project/fakemarjorie/tpl/index.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617e4df7b4c599_35007543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba9108264eece33fd631d280369bb77273c44a91' => 
    array (
      0 => '/Users/logichom/project/fakemarjorie/tpl/index.tpl.html',
      1 => 1635667445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../tpl/header.tpl.html' => 1,
  ),
),false)) {
function content_617e4df7b4c599_35007543 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="zh-Hant-TW">
    <head>
        <?php $_smarty_tpl->_subTemplateRender("file:../tpl/header.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                        <div style="height: 200px;line-height: 200px; text-align: center; background-color: white;">目前無公告</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Password Reset -->
        <?php echo '<script'; ?>
>
        function getShopcart() {
            alert('提醒您這是釣魚網站！要購買請到原始網站，謝謝！')
        }
        <?php echo '</script'; ?>
>
        <style>
            #fullpage img {
                max-width: 100%;
                width: 100%;
                object-fit: cover;
                height: -webkit-fill-available;
            }
    
            .header--sticky.fixed .header-nav {
                background-color: transparent;
            }
    
            .modal-content {
                background-color: rgba(0, 255, 0, 0);
            }
        </style>

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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <div class="section bg-image light-color" data-url="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <picture>
                        <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['source'];?>
" media="(max-width: 1200px)">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" />
                    </picture>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
	</div>
    
    <!-- JS -->
    <?php echo '<script'; ?>
 type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><?php echo '</script'; ?>
>

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

    <?php echo '<script'; ?>
 src="https://www.marjorie.co/template/marjorie_tpl/assets/js/plugin/jquery.fullPage.js"><?php echo '</script'; ?>
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
