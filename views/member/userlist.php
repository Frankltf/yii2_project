<!-- main container -->
<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>Users</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="Type a user's name..." />

                    <!-- custom popup filter -->
                    <!-- styles are located in <?php echo PROJECT;?>/assets/css/elements.css -->
                    <!-- script that enables this dropdown is located in <?php echo PROJECT;?>/assets/js/theme.js -->
                    <div class="ui-dropdown">
                        <div class="head" data-toggle="tooltip" title="Click me!">
                            Filter users
                            <i class="arrow-down"></i>
                        </div>
                        <div class="dialog">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <div class="body">
                                <p class="title">
                                    Show users where:
                                </p>
                                <div class="form">
                                    <select>
                                        <option />Name
                                        <option />Email
                                        <option />Number of orders
                                        <option />Signed up
                                        <option />Last seen
                                    </select>
                                    <select>
                                        <option />is equal to
                                        <option />is not equal to
                                        <option />is greater than
                                        <option />starts with
                                        <option />contains
                                    </select>
                                    <input type="text" />
                                    <a class="btn-flat small">Add filter</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="new-user.html" class="btn-flat success pull-right">
                        <span>&#43;</span>
                        NEW USER
                    </a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span4 sortable">
                            Name
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>Signed up
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>Total spent
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>Email
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row -->
                    <?php foreach ($data as $val):?>
                        <tr class="first" onclick="login_module.del('<?php echo $val['userid'];?>')">
                            <td>
                                <img src="<?php echo PROJECT;?>/assets/img/contact-img.png" class="img-circle avatar hidden-phone" />
                                <a href="user-profile.html" class="name"> <?php echo $val['username'];?></a>
                            </td>
                            <td>
                                <?php echo $val['userpass'];?>
                            </td>
                            <td>
                                <?php echo date('Y-h-d H:i:s',$val['createtime'])?>
                            </td>
                            <td class="align-right">
                                <a href="#"><?php echo $val['useremail'];?></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">
                <?php echo yii\widgets\LinkPager::widget(['pagination'=>$pager])?>
            </div>
            <!-- end users table -->
        </div>
    </div>
</div>
<script>
    var login_module = {
        url:"<?php echo yii\helpers\Url::to(['member/del']) ?>",
        getsucfun:function (data,status) {
            console.log(data)
            if(data.load){
                alert('success');
                window.location.href="<?php echo yii\helpers\Url::to(['member/userlist']) ?>"
            }
        },
        del:function ($id) {
            var obj={
                userid:$id,
            }
            sendget(this.url,obj,this.getsucfun)
        }
    };
</script>
<!-- end main container -->