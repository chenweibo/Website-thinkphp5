<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"C:\xampp\htdocs\Website-thinkphp5\public/../application/admin\view\product\cate.html";i:1495247877;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加管理员</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="__CSS__/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__CSS__/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="__CSS__/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">
    <link href="__CSS__/other.css" rel="stylesheet">

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>产品分类管理</h5>
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


                    <div class="form-group clearfix col-sm-1">
                        <a href="./cateAdd"><button class="btn btn-outline btn-primary" type="button">添加</button></a>
                    </div>

                    <div class="example-wrap">
                        <div class="example">
                            <div class="tree well " id="tree"></div>
                        </div>
                    </div>







                </div>
            </div>

                </div>
            </div>


   
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/content.min.js?v=1.0.0"></script>
<script src="__JS__/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="__JS__/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="__JS__/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="__JS__/plugins/bootstrap-table/tableExport.js"></script>
<script src="__JS__/plugins/bootstrap-table/bootstrap-table-export.min.js"></script>
<script src="__JS__/plugins/suggest/bootstrap-suggest.min.js"></script>
<script src="__JS__/plugins/layer/laydate/laydate.js"></script>
<script src="__JS__/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__JS__/plugins/layer/layer.min.js"></script>
<script src="__JS__/plugins/treeview/bootstrap-treeview.js"></script>


<script type="text/javascript">



    function a(d){
        var h='<ul>';
        for(var i=0;i<d.length;i++){
            h+=' <li data-id="'+d[i].id+'"><span><i class="glyphicon glyphicon-leaf"></i>  '+d[i].name+'</span> <a href="./cateEdit?id='+d[i].id+'">编辑</a> <a onclick="cateDel('+d[i].id+')" href="#">删除</a>';
            if(d[i].children&&d[i].children.length>0){
                h+=a(d[i].children)
            }
            h+='</li>';
        }
        h+='</ul>'
        return h;
    }

    $(function() {
        gettree();
    });
    
    function gettree() {

        $.getJSON(
            './cate',
            function (data) {

                $('#tree').html(a(data));

            }
        );

    }

    function cateDel(id){
        layer.confirm('确认删除?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON('./cateDel', {'id' : id}, function(res){
                if(res.code == 1){
                    layer.alert('删除成功');
                    gettree();
                }else{
                    layer.alert('删除失败');
                }
            });

            layer.close(index);
        })
    }



</script>
</body>
</html>
