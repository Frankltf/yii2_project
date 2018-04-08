<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<!-- ============================================================= HEADER : END ============================================================= -->        <!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">登录</h2>
                    <p>欢迎您回来，请您输入您的账户名密码</p>

                    <div class="social-auth-buttons">
                        <div class="row">
                            <div class="col-md-6">
                                <button id="login_qq" class="btn-block btn-lg btn btn-facebook"><i class="fa fa-qq"></i>
                                    使用QQ账号登录
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button id="login_weibo" class="btn-block btn-lg btn btn-twitter"><i
                                        class="fa fa-weibo"></i> 使用新浪微博账号登录
                                </button>
                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="_csrf"
                               value="alBKRTN3cGIZCAwgADVIDjtpEx1kQUcXUzglAH0OKDotHCwxfVomAw==">
                        <div class="form-group field-user-loginname">
                            <div class="field-row"><label class="control-label"
                                                          for="user-loginname">用户名/电子邮箱</label><input type="text"
                                                                                                      id="user-loginname"
                                                                                                      class="le-input"
                                                                                                      name="User[loginname]">
                            </div>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-user-userpass">
                            <div class="field-row"><label class="control-label" for="user-userpass">用户密码</label><input
                                    type="password" id="user-userpass2" class="le-input" name="User[userpass]"></div>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="field-row clearfix">
                            <div class="form-group field-user-rememberme">
                                <span class="pull-left"><label class="content-color"><input type="hidden"
                                                                                            name="User[rememberMe]"
                                                                                            value="0"><input
                                            type="checkbox" id="user-rememberme" class="le-checkbox auto-width inline"
                                            name="User[rememberMe]" value="1" checked=""><i class="fake-box"></i> <span
                                            class="bold">记住我</span></label></span>
                            </div>                        	<span class="pull-right">
                        		<a href="#" class="content-color bold">忘记密码 ?</a>
                        	</span>
                        </div>

                        <div class="buttons-holder">
                            <button type="button" onclick="log_module.action_submit()" class="le-button huge">安全登录</button>
                        </div><!-- /.buttons-holder -->


                </section><!-- /.sign-in -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <section class="section register inner-left-xs">
                    <h2 class="bordered">新建账户</h2>
                    <p>创建一个属于你自己的账户</p>

                        <input type="hidden" name="_csrf"
                               value="alBKRTN3cGIZCAwgADVIDjtpEx1kQUcXUzglAH0OKDotHCwxfVomAw==">
                        <div class="form-group field-user-useremail">
                            <div class="field-row"><label class="control-label" for="user-useremail">用户名</label><input
                                    type="text" id="user-username" class="le-input" name="User[useremail]"></div>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-user-useremail">
                            <div class="field-row"><label class="control-label" for="user-useremail">电子邮箱</label><input
                                    type="text" id="user-useremail" class="le-input" name="User[useremail]"></div>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-user-useremail">
                            <div class="field-row"><label class="control-label" for="user-useremail">密码</label><input
                                    type="text" id="user-userpass" class="le-input" name="User[useremail]"></div>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="buttons-holder">
                            <button type="button" class="le-button huge" onclick="reg_module.action_submit()">注册</button>
                        </div><!-- /.buttons-holder -->
                    <h2 class="semi-bold">加入我们您将会享受到前所未有的购物体验 :</h2>

                    <ul class="list-unstyled list-benefits">
                        <li><i class="fa fa-check primary-color"></i> 快捷的购物体验</li>
                        <li><i class="fa fa-check primary-color"></i> 便捷的下单方式</li>
                        <li><i class="fa fa-check primary-color"></i> 更加低廉的商品</li>
                    </ul>

                </section><!-- /.register -->

            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
<!-- ========================================= MAIN : END ========================================= -->        <!-- ============================================================= FOOTER ============================================================= -->
<script>
    var qqbtn = document.getElementById("login_qq");
    qqbtn.onclick = function () {
        window.location.href = "<?php echo yii\helpers\Url::to(['member/qqlogin']) ?>";
    }


    var reg_module = {
        url:"<?php echo yii\helpers\Url::to(['member/register']) ?>",
        action_submit:function(){
            var username=$('#user-username').val();
            var useremail=$('#user-useremail').val();
            var userpass=$('#user-userpass').val();
            var obj={
                username:username,
                useremail:useremail,
                userpass:userpass,
            }
            sendpost(this.url,obj,this.getsucfun)
        },
        getsucfun:function (data,status) {
            console.log(data)
            if(data.load){
                alert('success')
            }
        }
    };
    var log_module = {
        url:"<?php echo yii\helpers\Url::to(['member/login']) ?>",
        action_submit:function(){
            var username=$('#user-loginname').val();
            var userpass=$('#user-userpass2').val();
            var obj={
                username:username,
                userpass:userpass,
            }
            console.log(222)
            console.log(obj)
            sendget(this.url,obj,this.getsucfun)
        },
        getsucfun:function (data,status) {
            console.log(data)
            if(data.load){
                alert('success')
            }
        }
    };
</script>





