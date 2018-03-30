
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= CONTENT ========================================= -->

<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">
            <section id="shipping-address" style="margin-bottom:100px;margin-top:-10px">
                <h2 class="border h1">收货地址</h2>
                <a href="#" id="createlink">新建联系人</a>
                    <div class="row field-row" style="margin-top:10px">
                        <div class="col-xs-12">
                            <input class="le-radio big address" type="radio" name="address" value=""';} ?> />
                            <a class="simple-link bold" href="#">aaaaa</a>
                        </div>
                        <a style="margin-left:45px" href="">删除</a>
                    </div><!-- /.field-row -->
            </section><!-- /#shipping-address -->

            <div class="billing-address" style="display:none;">
                <h2 class="border h1">新建联系人</h2>

                <div class="row field-row">
                    <div class="col-xs-12 col-sm-6">
                        <label>姓*</label>
                        <input class="le-input" name="firstname" >
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label>名*</label>
                        <input class="le-input" name="lastname" >
                    </div>
                </div><!-- /.field-row -->

                <div class="row field-row">
                    <div class="col-xs-12">
                        <label>公司名称</label>
                        <input class="le-input" name="company" >
                    </div>
                </div><!-- /.field-row -->

                <div class="row field-row">
                    <div class="col-xs-12 col-sm-6">
                        <label>地址*</label>
                        <input class="le-input" data-placeholder="例如：北京市朝阳区" name="address1" >
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <label>&nbsp;</label>
                        <input class="le-input" data-placeholder="例如：酒仙桥北路" name="address2" >
                    </div>
                </div><!-- /.field-row -->

                <div class="row field-row">
                    <div class="col-xs-12 col-sm-4">
                        <label>邮编</label>
                        <input class="le-input" name="postcode" >
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <label>电子邮箱地址*</label>
                        <input class="le-input" name="email" >
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <label>联系电话*</label>
                        <input class="le-input" name="telephone" >
                    </div>
                </div><!-- /.field-row -->

                <!--<div class="row field-row">
                    <div id="create-account" class="col-xs-12">
                        <input  class="le-checkbox big" type="checkbox"  />
                        <a class="simple-link bold" href="#">新建联系人？</a>
                    </div>
                </div>--><!-- /.field-row -->

                <div class="place-order-button">
                    <button class="le-button small">新建</button>
                </div><!-- /.place-order-button -->
            </div><!-- /.billing-address -->

            <section id="your-order">
                <h2 class="border h1">您的订单详情</h2>
                    <div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="" class="qty">33x</a>
                        </div>

                        <div class="col-xs-12 col-sm-9 ">

                            <div class="title">

                                <a href="" class="thumb-holder">
                                    <img class="lazy" alt="" src="" />
                                </a>
                                <a style="margin-left:50px" href="">aaa</a></div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">￥</div>
                        </div>
                    </div><!-- /.order-item -->
            </section><!-- /#your-order -->
            <input type="hidden" name="addressid" value>
            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>商品总价</label>
                                <div style="width:100%;text-align:right" id="total" class="value">￥ <span>aaa</div>
                            </li>
                            <li>
                                <label>选择快递</label>
                                <div style="width:100%;text-align:right" class="value">
                                    <div class="radio-group">
                                            <input class="le-radio express" type="radio" name="expressid" value="" > <div class="radio-label bold">fff<span class="bold"> ￥ ffff</span></div><br>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>订单总额</label>
                                <div class="value" style="width:100%;text-align:right" id="ototal">￥ <span>ff</span></div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->

            <div id="payment-method-options">

                <div class="payment-method-option">
                    <input class="le-radio" type="radio" name="paymethod" value="alipay" checked>
                    <div class="radio-label bold ">支付宝支付</div>
                </div><!-- /.payment-method-option -->

            </div><!-- /#payment-method-options -->

            <div class="place-order-button">
                <button class="le-button big">确认订单</button>
            </div><!-- /.place-order-button -->

        </div><!-- /.col -->
    </div><!-- /.container -->
</section><!-- /#checkout-page -->
<!-- ========================================= CONTENT : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
<input type="hidden" value="fff" name="orderid">
