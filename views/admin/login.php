<!DOCTYPE html>
<html class="login-bg">
<head>
    <title>慕课商城 - 后台管理</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="<?php echo PROJECT;?>/assets/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo PROJECT;?>/assets/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo PROJECT;?>/assets/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT;?>/assets/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT;?>/assets/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT;?>/assets/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT;?>/assets/css/lib/font-awesome.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


<div class="row-fluid login-wrapper">
    <a class="brand" href="index.html"></a>

    <div class="span4 box">
        <div class="content-wrap">
            <h6>慕课商城 - 后台管理</h6>
            <input class="span12" type="text" id="username" placeholder="管理员账号" />
            <input class="span12" type="password" id="userpass" placeholder="管理员密码" />
            <a href="#" class="forgot">忘记密码?</a>
            <div class="remember">
                <input id="remember-me" type="checkbox" />
                <label for="remember-me">记住我</label>
            </div>
            <a class="btn-glow primary login" href="javascript:void(0)" onclick="login_module.action_submit()">登录</a>
        </div>
    </div>

    <div class="span4 no-account">
        <p>没有账户?</p>
        <a href="signup.html">注册</a>
    </div>
</div>

<!-- scripts -->
<script src="<?php echo PROJECT;?>/assets/js/jquery-latest.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/theme.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/tools.js"></script>
<!-- pre load bg imgs -->
<script type="text/javascript">
    var login_module = {
        url:"<?php echo yii\helpers\Url::to(['admin/signin']) ?>",
        action_submit:function(){
            console.log(JSON)
            var username=$('#username').val();
            var userpass=$('#userpass').val();
            var obj={
                username:username,
                userpass:userpass,
            }
            sendget(this.url,obj,this.getsucfun)
        },
        getsucfun:function (data,status) {
            if(data.load){
                window.location.href="<?php echo yii\helpers\Url::to(['index/index']) ?>"
            }
        }
    };





    $(function () {
        // bg switcher
        var $btns = $(".bg-switch .bg");
        $btns.click(function (e) {
            e.preventDefault();
            $btns.removeClass("active");
            $(this).addClass("active");
            var bg = $(this).data("img");
            $("html").css("background-image", "url('img/bgs/" + bg + "')");
        });
    });

</script>

</body>
</html>