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

    <link rel="stylesheet" type="text/css" href="<?php echo PROJECT;?>/assets/css/lib/font-awesome.css" />

    <link rel="stylesheet" href="<?php echo PROJECT;?>/assets/css/compiled/signup.css" type="text/css" media="screen" />

    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
<div class="header">
    <a href="index.html">
        <img src="<?php echo PROJECT;?>/assets/img/logo.png" class="logo" />
    </a>
</div>
<div class="row-fluid login-wrapper">
    <div class="box">
        <div class="content-wrap">
            <h6>Sign Up</h6>
            <input class="span12" id="input1" type="text" placeholder="E-mail address" />
            <input class="span12" id="input4" type="password" placeholder="user name" />
            <input class="span12" id="input2" type="password" placeholder="Password" />
            <input class="span12" id="input3" type="password" placeholder="Confirm Password" />
            <div class="action">
                <a class="btn-glow primary signup" id="btn" onclick="addobj.action_submit()" href="javascript:void(0)">Sign up</a>
            </div>
        </div>
    </div>

    <div class="span4 already">
        <p>Already have an account?</p>
        <a href="signin.html">Sign in</a>
    </div>
</div>

<!-- scripts -->
<script src="<?php echo PROJECT;?>/assets/js/jquery-latest.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/theme.js"></script>
<script src="<?php echo PROJECT;?>/assets/js/tools.js"></script>
<script>
    var addobj={
        url:"<?php echo yii\helpers\Url::to(['admin/add']) ?>",
        action_submit:function(){
            var email=$('#input1').val();
            var username=$('#input4').val();
            var userpass=$('#input3').val();
            var obj={
                username:username,
                email:email,
                userpass:userpass,
            }
            sendget(this.url,obj,this.getsucfun)
        },
        getsucfun:function (data,status) {
            console.log(data)

        }
    }


</script>

</body>
</html>