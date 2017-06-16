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
use think\Route;
use think\Url;
use think\Db;

Route::rule('/','index/Index/index');
Route::rule('newsView/:id','index/News/newsView');
Route::rule('indusrtyView/:id','index/News/indusrtyView');

Route::get('/:id','index/Product/productView',['ext'=>'html']);
Route::get('/:rewrite','index/Product/productlist');




return [

    '__alias__' =>  [
        'about'  =>  'index/Page/about',
        'network'  =>  'index/Page/network',
        'honor'  =>  'index/Page/honor',
        'job'  =>  'index/Page/job',
        'contact'  =>  'index/Page/contact',
        'news'  =>  'index/News/index',
        'indusrty'  =>  'index/News/indusrty',
        'product'  =>  'index/Product/index',
        'search'  =>  'index/Index/search',

    ],



     
];
