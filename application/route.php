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

Route::rule('/', 'index/Index/index');
Route::rule('newsView/:id', 'index/News/newsView');
Route::rule('indusrtyView/:id', 'index/News/indusrtyView');

Route::rule('/wechat', 'admin/Wechat/index');




return [

    '__alias__' =>  [
        'about'  =>  'index/Page/about',
        'network'  =>  'index/Page/network',
        'honor'  =>  'index/Page/honor',
        'equipment'  =>  'index/Page/equipment',
        'job'  =>  'index/Page/job',
        'contact'  =>  'index/Page/contact',
        'news'  =>  'index/News/index',
        'indusrty'  =>  'index/News/indusrty',
        'cases'  =>  'index/Product/index',
        'search'  =>  'index/Index/search',
        'feedback'  =>  'index/Page/feedback',
        'code'  =>  'index/Page/code',
        'gbook'  =>  'index/index/gbook',
        'product'  =>  'index/Product/index',



    ],




];
