<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<!-- ============================================================= HEADER : END ============================================================= -->		<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">
                        <img src="">
                        完善您的信息
                    </h2>
                    <p>请填写一个用户名和密码</p>

                    <div class="social-auth-buttons">
                    </div>

                    <input type="text" value="" class="le-input"><br>

                    <div class="field-row clearfix">
                    </div>

                    <div class="buttons-holder">
                    </div><!-- /.buttons-holder -->


                </section><!-- /.sign-in -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main><!-- /.authentication -->
<!-- ========================================= MAIN : END ========================================= -->		<!-- ============================================================= FOOTER ============================================================= -->
<script>
    var qqbtn = document.getElementById("login_qq");
    qqbtn.onclick = function(){
        window.location.href="<?php echo yii\helpers\Url::to(['member/qqlogin']) ?>";
    }
</script>





