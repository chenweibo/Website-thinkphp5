<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\xampp\htdocs\Website-thinkphp5\public/../application/admin\view\product\contentadd.html";i:1495265707;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>产品分类</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__CSS__/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__CSS__/style.min.css?v=4.1.0" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="__CSS__/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="__CSS__/plugins/webuploader/webuploader.css" rel="stylesheet">
    <link href="__CSS__/plugins/webuploader/webuploader.css" rel="stylesheet">
    <link rel="stylesheet" href="__CSS__/layui/css/layui.css"  media="all">
    <link rel="stylesheet" type="text/css" href="__ADMIN__/edit/css/wangEditor.min.css">
    <style>

        .layui-form-switch{
            width:55px;
        }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>产品分类</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" onsubmit="return toVaild()">

                        <div class="form-group">
                            <label class="col-sm-1 control-label">名称：</label>
                            <div class="input-group col-sm-4">
                                <input id="cate_name" type="text" class="form-control" name="name" required  aria-required="true">

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">英文名称：</label>
                            <div class="input-group col-sm-4">
                                <input id="cate_enname" type="text" class="form-control" name="cate_enname"  aria-required="true">

                            </div>

                        </div>


                        <div class="form-group">
                            <label class="col-sm-1 control-label">伪静态</label>
                            <div class="col-md-4 input-group">


                                <input id="jt" name="cate_rewrite" class="form-control" type="text" value="" name="icon" required  aria-required="true"  >

                                <span class="input-group-addon shengcheng " style="width:80px;cursor: pointer;pointer-events: auto;" >自动生成</span>

                            </div>

                        </div>








                        <div class="form-group">
                            <label class="col-sm-1 control-label">排序：</label>
                            <div class="input-group col-sm-4">
                                <input id="site_title" type="text" value="99" class="form-control" name="cate_sort"  aria-required="true">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-1 control-label">主要内容：</label>
                            <div class="input-group col-sm-8">

                              <textarea id="textarea1" style="height: 400px">
                               <p>请输入内容...</p>
                            </textarea>

                            </div>
                        </div>

                        <div class="form-group layui-form">



                            <label class="col-sm-1 control-label">推荐：</label>
                            <div class=" col-sm-1">



                                <input type="checkbox"  lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF">
                                <input type="hidden" class="cate_recommend" name="cate_recommend" value="0">





                            </div>


                            <label class=" control-label" style="float: left; margin-right: 15px">显示：</label>
                            <div class="input-group col-sm-1">



                                <input type="checkbox" checked=""  lay-skin="switch" lay-filter="switchTestshow" lay-text="ON|OFF">
                                <input type="hidden" class="show" name="show" value="1">



                            </div>






                        </div>


                        <div class="form-group">
                            <label class="col-sm-1 control-label">缩略图：</label>
                            <div class="col-md-4 input-group">
                                <input id="lefile" type="file" name="image" style="display:none">
                                <span class="input-group-addon" onclick="$('input[id=lefile]').click();" style="cursor: pointer; background-color: #e7e7e7"><i class="fa fa-folder-open"></i>选择</span>
                                <input id="photoCover" name="cate_img" class="form-control" type="text" value="" name="icon" >

                                <span class="input-group-addon ut2" style="width:80px;cursor: pointer;pointer-events: auto;" ><i class="fa fa-folder-open"></i>点击上传</span>

                            </div>
                            <label id="targetwz" for="inputPassword" style="color:#f00" class="sr-only">*请选择文件</label>
                        </div>



                        <input type="hidden" name="cate_type" value="1">
                        <div class="form-group">
                            <div class="col-sm-1 col-sm-offset-1">
                                <!--<input type="button" value="提交" class="btn btn-primary" id="postform"/>-->
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>

                    </form>

            </div>

        </div>
    </div>
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/validate/jquery.validate.min.js"></script>
<script src="__JS__/plugins/validate/messages_zh.min.js"></script>
<script src="__JS__/plugins/iCheck/icheck.min.js"></script>
<script src="__JS__/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="__JS__/plugins/layer/layer.min.js"></script>

<script src="__JS__/plugins/webuploader/webuploader.min.js"></script>
<script src="__JS__/plugins/layer/layer.min.js"></script>
<script src="__JS__/plugins/validate/jquery.validate.min.js"></script>
<script src="__JS__/plugins/validate/messages_zh.min.js"></script>

<script src="__CSS__/layui/layui.js" charset="utf-8"></script>

    <script type="text/javascript" src="__ADMIN__/edit/js/wangEditor.min.js"></script>

<script type="text/javascript">

    //表单提交
    function toVaild(){
        var jz;
        var url = "./cateAdd";
        $.ajax({
            type:"POST",
            url:url,
            data:{'data' : $('#commentForm').serialize()},// 你的formid
            async: false,
            beforeSend:function(){
                jz = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
            },
            error: function(request) {
                layer.close(jz);
                swal("网络错误!", "", "error");
            },
            success: function(data) {
                //关闭加载层
                layer.close(jz);
                if(data.code == 1){
                    window.location.href="./cate";
                }else{
                    swal(data.msg, "", "error");
                }

            }
        });

        return false;
    }

    //表单验证
    $(document).ready(function(){
        $(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",});
    });
    $.validator.setDefaults({
        highlight: function(e) {
            $(e).closest(".form-group").removeClass("has-success").addClass("has-error")
        },
        success: function(e) {
            e.closest(".form-group").removeClass("has-error").addClass("has-success")
        },
        errorElement: "span",
        errorPlacement: function(e, r) {
            e.appendTo(r.is(":radio") || r.is(":checkbox") ? r.parent().parent().parent() : r.parent())
        },
        errorClass: "help-block m-b-none",
        validClass: "help-block m-b-none"
    });






    layui.use('form', function(){
        var form = layui.form(); //只有执行了这一步，部分表单元素才会修饰成功

        //……
    });

    var up=$("#photoCover");
    var upfile=$("#lefile");
    $('input[id=lefile]').change(function() {
        $('#photoCover').val($(this).val());
    });


    $(".ut2").click(function(){

        if(up.val()==0 ||upfile.val()==0){

            up.focus();
            $("#targetwz").removeClass("sr-only");
            return false;
        }

        else{
            var formData = new FormData($( "#commentForm" )[0]);
            $.ajax({
                url: '/admin/common/uploads' ,
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,

                beforeSend:function(){
                    jz = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
                },
                success: function (data) {
                    layer.close(jz);
                    $('#photoCover').val('/uploads/'+data);
                },
                error: function () {
                    alert('上传错误联系管理员');
                }
            });

        }


    });


    var editor = new wangEditor('textarea1');

    wangEditor.config.printLog = false;
    editor.config.uploadImgUrl = '/admin/common/uploadsedit';
    editor.config.uploadParams = {
        // token1: 'abcde',
        // token2: '12345'
    };

    editor.config.mapAk = 'Hl7GMskDe5PXgBsY0PSD0qEFzVNtKGBc';  // 此处换成自己申请的密钥
    editor.config.uploadImgFileName = 'img'
    editor.config.uploadHeaders = {
        // 'Accept' : 'text/x-json'
    }
    editor.create();



</script>



<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form()
            ,layer = layui.layer


        //监听指定开关
        form.on('switch(switchTest)', function(data){
             $('.cate_recommend').attr('value',this.checked ? '1' : '0')

        });

        form.on('switch(switchTestshow)', function(data){
            $('.show').attr('value',this.checked ? '1' : '0')

        });

    });



    $('.shengcheng').click(function () {


        var name= $('#cate_name').val();

        if(name==false)
        {
            swal("名称为空无法生成", "", "error");

            return false;

        }
        else {


            $.ajax({

                type:'POST',
                url:'/admin/common/routecteate' ,
                data: { "name" :name } ,
                dataType:'json',
                success:function(data){

                    var info=data;
                    $('#jt').attr('value',info);
                },


                error: function () { alert("出错,联系管理员") }

            });

            return ture;

        }


    });
</script>
</body>
</html>
