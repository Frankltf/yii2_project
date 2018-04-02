<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>慕课商城</title>
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/bootstrap.min.css">

	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/main.css">
	    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/red.css">
	    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/owl.transitions.css">
		<link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/animate.min.css">

        
        <!-- Icons/Glyphs -->
		<link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/font-awesome.min.css">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo PROJECT;?>/assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="<?php echo PROJECT;?>/assets/js/html5shiv.js"></script>
			<script src="<?php echo PROJECT;?>/assets/js/respond.min.js"></script>
		<![endif]-->

 
	</head>
<body>
	
	<div class="wrapper">
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <ul>
            <li><a href="">首页</a></li>
                <li><a href="">我的购物车</a></li>
                <li><a href="">我的订单</a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-6 no-margin">
            <ul class="right">
                <?php if(\Yii::$app->session->get('admin')['isLogin'] == 1):?>
                    您好 , 欢迎<?php echo \Yii::$app->session->get('admin')['username']; ?>回来  , <a href="">退出</a>
                <?php else:?>
                    <li><a href="<?php echo yii\helpers\Url::to(['admin/login'])?>">注册</a></li>
                    <li><a href="<?php echo yii\helpers\Url::to(['admin/login'])?>">登录</a></li>
                <?php endif;?>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
<header>
	<div class="container no-padding">
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
    <a href="<?php echo yii\helpers\Url::to(['index/index'])  ?>">
		<img alt="logo" src="<?php echo PROJECT;?>/assets/images/logo.PNG" width="233" height="54"/>
	</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->		</div><!-- /.logo-holder -->

		<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
			<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> (+086) 123 456 7890
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> contact@<span class="le-color">jason.com</span>
    </div>
</div><!-- /.contact-row -->
<!-- ============================================================= SEARCH AREA ============================================================= -->
<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="搜索商品" />

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">所有分类</a>

                    <ul class="dropdown-menu" role="menu" >
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>

                    </ul>
                </li>
            </ul>

            <a style="padding:15px 15px 13px 12px" class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->		</div><!-- /.top-search-holder -->

		<div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
			<div class="top-cart-row-container">

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <div class="top-cart-holder dropdown animate-dropdown">
        
        <div class="basket">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                <span class="count">aaaaa</span>
                    <img src="<?php echo PROJECT;?>/assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">您的购物车:</span>
                    <span class="total-price">
                    <span class="sign">￥</span><span class="value">aaaa</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                <img alt="" src="" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                            <div class="title">aa</div>
                            <div class="price">￥ 333</div>
                            </div>
                        </div>
                        <a class="close-btn" href=""></a>
                    </div>
                </li>
                <li class="checkout">
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                            <a href="" class="le-button inverse">查看购物车</a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                            <a href="" class="le-button">去往收银台</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->		</div><!-- /.top-cart-row -->
    
	</div><!-- /.container -->
</header>
        <?php echo $content; ?>
<footer id="footer" class="color-bg">
    
    <div class="container">
        <div class="row no-margin widgets-row">
            <div class="col-xs-12  col-sm-4 no-margin-left">
                <!-- ============================================================= FEATURED PRODUCTS ============================================================= -->
<div class="widget">
    <h2>推荐商品</h2>
    <div class="body">
        <ul>
            <li>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 no-margin">
                    <a href=""></a>
                        <div class="price">
                        <div class="price-prev">￥333</div>
                        <div class="price-current">￥333</div>
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-3 no-margin">
                    <a href="" class="thumb-holder">
                            <img alt="" src="" data-echo="" />
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- /.body -->
</div> <!-- /.widget -->
<!-- ============================================================= FEATURED PRODUCTS : END ============================================================= -->            </div><!-- /.col -->
            <div class="col-xs-12 col-sm-4 ">
                <!-- ============================================================= ON SALE PRODUCTS ============================================================= -->
<div class="widget">
    <h2>热卖商品</h2>
    <div class="body">
        <ul>
            <li>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 no-margin">
                    <a href="">4444</a>
                        <div class="price">
                        <div class="price-prev">￥33</div>
                        <div class="price-current">￥33</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 no-margin">
                    <a href="" class="thumb-holder">
                            <img alt="" src="" data-echo="" />
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- /.body -->
</div> <!-- /.widget -->
<!-- ============================================================= ON SALE PRODUCTS : END ============================================================= -->            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-4 ">
                <!-- ============================================================= TOP RATED PRODUCTS ============================================================= -->
<div class="widget">
    <h2>最新商品</h2>
    <div class="body">
        <ul>
            <li>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 no-margin">
                    <a href="">aaa</a>
                        <div class="price">
                        <div class="price-prev">￥33</div>
                        <div class="price-current">￥33</div>
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-3 no-margin">
                    <a href="" class="thumb-holder">
                            <img alt="" />
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- /.body -->
</div><!-- /.widget -->
<!-- ============================================================= TOP RATED PRODUCTS : END ============================================================= -->            </div><!-- /.col -->

        </div><!-- /.widgets-row-->
    </div><!-- /.container -->

    <div class="sub-form-row">
        <!--<div class="container">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                <form role="form">
                    <input placeholder="Subscribe to our newsletter">
                    <button class="le-button">Subscribe</button>
                </form>
            </div>
        </div>--><!-- /.container -->
    </div><!-- /.sub-form-row -->

    <div class="link-list-row">
        <div class="container no-padding">
            <div class="col-xs-12 col-md-4 ">
                <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
		<img alt="logo" src="<?php echo PROJECT;?>/assets/images/logo.PNG" width="233" height="54"/>
    </div><!-- /.footer-logo -->
    
    <p class="regular-bold"> 请通过电话，电子邮件随时联系我们</p>
    
    <p>
        西城区二环到三环德胜门外大街10号TCL大厦3层(马甸桥南), 北京市西城区, 中国
        <br>慕课网 (QQ群:416465236)
    </p>
    
    <!--<div class="social-icons">
        <h3>Get in touch</h3>
        <ul>
            <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-pinterest"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>
            <li><a href="#" class="fa fa-stumbleupon"></a></li>
            <li><a href="#" class="fa fa-dribbble"></a></li>
            <li><a href="#" class="fa fa-vk"></a></li>
        </ul>
    </div>--><!-- /.social-icons -->

</div>
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            </div>

            <div class="col-xs-12 col-md-8 no-margin">
                <!-- ============================================================= LINKS FOOTER ============================================================= -->
<div class="link-widget">
    <div class="widget">
        <h3>最新商品</h3>
        <ul>
            <li><a href="">aaa</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>热门商品</h3>
        <ul>
            <li><a href="">aaa</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->

<div class="link-widget">
    <div class="widget">
        <h3>促销商品</h3>
        <ul>
            <li><a href="">aaa</a></li>
        </ul>
    </div><!-- /.widget -->
</div><!-- /.link-widget -->
<!-- ============================================================= LINKS FOOTER : END ============================================================= -->            </div>
        </div><!-- /.container -->
    </div><!-- /.link-list-row -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="copyright">
                &copy; <a href="">Imooc.com</a> - all rights reserved
                </div><!-- /.copyright -->
            </div>
            <div class="col-xs-12 col-sm-6 no-margin">
                <div class="payment-methods ">
                    <ul>
                        <li><img alt="" src="<?php echo PROJECT;?>/assets/images/payments/payment-visa.png"></li>
                        <li><img alt="" src="<?php echo PROJECT;?>/assets/images/payments/payment-master.png"></li>
                        <li><img alt="" src="<?php echo PROJECT;?>/assets/images/payments/payment-paypal.png"></li>
                        <li><img alt="" src="<?php echo PROJECT;?>/assets/images/payments/payment-skrill.png"></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div><!-- /.container -->
    </div><!-- /.copyright-bar -->

</footer><!-- /#footer -->
<!-- ============================================================= FOOTER : END ============================================================= -->	</div><!-- /.wrapper -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="<?php echo PROJECT;?>/assets/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/gmap3.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/css_browser_selector.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/echo.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/jquery.easing-1.3.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo PROJECT;?>/assets/js/jquery.raty.min.js"></script>
    <script src="<?php echo PROJECT;?>/assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="<?php echo PROJECT;?>/assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo PROJECT;?>/assets/js/wow.min.js"></script>
	<script src="<?php echo PROJECT;?>/assets/js/scripts.js"></script>
    <script>
        $("#createlink").click(function(){
            $(".billing-address").slideDown();
        });
        $(".minus").click(function(){
            var cartid = $("input[name=productnum]").attr('id');
            var num = parseInt($("input[name=productnum]").val()) - 1;
            if (parseInt($("input[name=productnum]").val()) <= 1) {
                var num = 1;
            }
            var total = parseFloat($(".value.pull-right span").html());
            var price = parseFloat($(".price span").html());
            changeNum(cartid, num);
            var p = total - price;
            if (p < 0) {
                var p = "0";
            }
            $(".value.pull-right span").html(p + "");
            $(".value.pull-right.ordertotal span").html(p + "");
        });
        $(".plus").click(function(){
            var cartid = $("input[name=productnum]").attr('id');
            var num = parseInt($("input[name=productnum]").val()) + 1;
            var total = parseFloat($(".value.pull-right span").html());
            var price = parseFloat($(".price span").html());
            changeNum(cartid, num);
            var p = total + price;
            $(".value.pull-right span").html(p + "");
            $(".value.pull-right.ordertotal span").html(p + "");
        });
        function changeNum(cartid, num)
        {
            $.get('', {'productnum':num, 'cartid':cartid}, function(data){
                location.reload();
            });
        }
        var total = parseFloat($("#total span").html());
        $(".le-radio.express").click(function(){
            var ototal = parseFloat($(this).attr('data')) + total;
            $("#ototal span").html(ototal);
        });
        $("input.address").click(function(){
            var addressid = $(this).val();
            $("input[name=addressid]").val(addressid);
        });



    </script>

</body>
</html>
