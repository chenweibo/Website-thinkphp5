<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$
return [

    //模板参数替换
    'view_replace_str'       => array(
        '__CSS__'    => '/static/admin/css',
        '__JS__'     => '/static/admin/js',
        '__IMG__' => '/static/admin/images',
        '__UP__' => '/uploads',
        '__ADMIN__' => '/static/admin',


    ),

    //管理员状态
    'user_status' => [
        '1' => '正常',
        '2' => '禁止登录'
    ],
    //角色状态
    'role_status' => [
        '1' => '启用',
        '2' => '禁用'
    ],



    'type' => [
    '1' => '产品',
    '2' => '文章',
    '3' => '图片',
    '4' => '下载',
    '5'=>'留言' ,
    '6'=>'单篇'


],

    'wechat'=>[

        'appID' =>'wx443c505ca3b848b0' ,
        'appsecret'=>'b072597978573632bd6160a8fa44eecb',
         'token' =>'bb6',
    ]

];
