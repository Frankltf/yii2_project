
<!-- navbar -->

<!-- end navbar -->

<!-- main container .wide-content is used for this layout without sidebar :)  -->
<div class="content wide-content">
    <div class="container-fluid">
        <div class="settings-wrapper" id="pad-wrapper">
            <!-- avatar column -->
            <div class="span3 avatar-box">
                <div class="personal-image">
                    <img src="<?php echo PROJECT;?>/assets/img/personal-info.png" class="avatar img-circle" />
                    <p>上传您的头像...</p>

                    <input type="file" />
                </div>
            </div>

            <!-- edit form column -->
            <div class="span7 personal-info">
                <div class="alert alert-info">
                    <i class="icon-lightbulb"></i>您可以在这里编辑您的个人信息
                </div>
                <h5 class="personal-title">个人信息</h5>

                <form />
                <div class="field-box">
                    <label>昵称:</label>
                    <input class="span5 inline-input" type="text" value="Alejandra" />
                </div>
                <div class="field-box">
                    <label>真实姓名:</label>
                    <input class="span5 inline-input" type="text" value="Galvan" />
                </div>
                <div class="field-box">
                    <label>公司:</label>
                    <input class="span5 inline-input" type="text" value="Design Co." />
                </div>
                <div class="field-box">
                    <label>电子邮箱:</label>
                    <input class="span5 inline-input" type="text" value="alejandra@design.com" />
                </div>
                <div class="field-box">
                    <label>性别:</label>
                    <div class="ui-select">
                        <select id="user_time_zone" name="user[time_zone]">
                            <option value="0" />保密
                            <option value="1" />男
                            <option value="2" />女
                        </select>
                    </div>
                </div>
                <div class="field-box">
                    <label>用户名:</label>
                    <input class="span5 inline-input" type="text" value="alegalvan" />
                </div>
                <div class="field-box">
                    <label>密码:</label>
                    <input class="span5 inline-input" type="password" value="blablablabla" />
                </div>
                <div class="field-box">
                    <label>确认密码:</label>
                    <input class="span5 inline-input" type="password" value="blablablabla" />
                </div>
                <div class="span6 field-box actions">
                    <input type="button" class="btn-glow primary" value="保存修改" />
                    <span>或者</span>
                    <input type="reset" value="取消" class="reset" />
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
