<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>Create a new user</h3>
            </div>

            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">
                        <form class="new_user_form inline-input" />
                        <div class="ui-select">
                            <select id="categoryparent">

                            </select>
                        </div>
                        <div class="span12 field-box">
                            <label>category name:</label>
                            <input id="categoryname" class="span9" type="text" />
                        </div>
                        <div class="span11 field-box actions">
                            <input type="button" onclick="submitobj.action_submit()" class="btn-glow primary" value="Create user" />
                            <span>OR</span>
                            <input type="reset" value="Cancel" class="reset" />
                        </div>
                        </form>
                    </div>
                </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        Click above to see difference between inline and normal inputs on a form
                    </div>
                    <h6>Sidebar text for instructions</h6>
                    <p>Add multiple users at once</p>
                    <p>Choose one of the following file types:</p>
                    <ul>
                        <li><a href="#">Upload a vCard file</a></li>
                        <li><a href="#">Import from a CSV file</a></li>
                        <li><a href="#">Import from an Excel file</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var submitobj = {
        url: "<?php echo yii\helpers\Url::to(['admin/addcate']) ?>",
        action_submit: function () {
            var categoryname = $('#categoryname').val();
            var categoryparent = $('#categoryparent').val()?$('#categoryparent').val():0;
            var obj = {
                categoryname: categoryname,
                categoryparent: categoryparent,
            }
            console.log(obj)
            console.log(this.url)
            sendpost(this.url, obj, this.getsucfun)
        },
        getsucfun: function (data, status) {
            console.log(data)
            if (data.load) {
                alert('success');
            }
        }
    }
    var initobj = {
        url: "<?php echo yii\helpers\Url::to(['admin/catechoose']) ?>",
        action_submit: function () {
            var obj={}
            console.log(333)
            sendget(this.url,obj,this.getsucfun)
        },
        getsucfun: function (data, status) {
            console.log(222)
            console.log(data)
            if (data.load) {
                var str='';
                    for(var i=0;i<data.rows.length;i++){
                        str+='<option value="'+data.rows[i]['cateid']+'">'+data.rows[i]['title']+'</option>';
                    }
                $('#categoryparent').append(str);
            }
        }

    }
  initobj.action_submit();

</script>