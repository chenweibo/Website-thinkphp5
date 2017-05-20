<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\xampp\htdocs\Website-thinkphp5\public/../application/admin\view\product\contentlist.html";i:1495257569;}*/ ?>
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
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>产品管理</h5>
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
                            <a href="./contentAdd?type=1"><button class="btn btn-outline btn-primary" type="button">添加产品 </button></a>
                        </div>
                    <!--搜索框开始-->
                    <form id='commentForm' role="form" method="post" class="form-inline">
                        <div class="content clearfix m-b">
                            <div class="form-group">
                                <label>产品名称：</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button" style="margin-top:5px" id="search"><strong>搜 索</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--搜索框结束-->
                    <div class="hr-line-dashed"></div>


                        <div class="example-wrap">
                            <div class="example">
                                <table id="cusTable" data-height="700">
                                    <thead>

                                    <th data-field="id">id</th>
                                    <th data-field="slide_name">名称</th>
                                    <th data-field="slide_name">分类</th>
                                    <th data-field="slide_sort">排序</th>
                                    <th data-field="slide_name">缩略图</th>
                                    <th data-field="slide_name">显示</th>
                                    <th data-field="operate">操作</th>
                                    </thead>
                                </table>
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


<script type="text/javascript">
    function initTable() {
        //先销毁表格
        $('#cusTable').bootstrapTable('destroy');
        //初始化表格,动态从服务器加载数据
        $("#cusTable").bootstrapTable({
            method: "get",  //使用get请求到服务器获取数据
            url: "./content", //获取数据的地址
            striped: true,  //表格显示条纹
            pagination: true, //启动分页
//            showColumns: true,  //显示下拉框勾选要显示的列
//            showRefresh: true,  //显示刷新按钮
//           singleSelect : true, // 单选checkbox
            maintainSelected: true,

            pageSize: 10,  //每页显示的记录数
            pageNumber:1, //当前第几页
//            showExport: true,//显示导出按钮
//            exportDataType: "basic",//导出类型
            pageList: [5, 10, 15, 20, 25],  //记录数可选列表
            sidePagination: "server", //表示服务端请求
            //设置为undefined可以获取pageNumber，pageSize，searchText，sortName，sortOrder
            //设置为limit可以获取limit, offset, search, sort, order
            queryParamsType : "undefined",
            queryParams: function queryParams(params) {   //设置查询参数
                var param = {
                    pageNumber: params.pageNumber,
                    pageSize: params.pageSize,
                    searchText:$('#username').val()
                          
                };
                return param;
            },
            onLoadSuccess: function(){  //加载成功时执行
             
            },
            onLoadError: function(){  //加载失败时执行
                layer.msg("加载数据失败");
            }
        });
    }





    $(document).ready(function () {
        //调用函数，初始化表格
        initTable();
        initTable1();
        initTable2();
        //当点击查询按钮的时候执行
      
    });

    function slideDel(id){
        layer.confirm('确认删除?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON('./slideDel', {'id' : id}, function(res){
                if(res.code == 1){
                    layer.alert('删除成功');
                    initTable();
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
