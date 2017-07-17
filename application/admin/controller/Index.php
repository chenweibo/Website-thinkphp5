<?php

namespace app\admin\controller;

use app\admin\model\Content;
use app\admin\model\Gbook;
use app\admin\model\PageModel;

class Index extends Base
{
    public function index()
    {
        return $this->fetch('/index');
    }

    /**
     * 后台默认首页
     * @return mixed
     */
    public function indexPage()
    {
        $info = array(
            'ip' =>' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '域名'=>$_SERVER['SERVER_NAME'],
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s", time()+8*3600),
            '剩余空间'=>round((disk_free_space(".")/(1024*1024)), 2).'M',

        );
        $gbook=new Gbook();
        $content=new Content();
        $page=new PageModel();
        $pronum=$content->getAllContent('type=1');
        $articlenum=$content->getAllContent('type=2');
        $imgnum=$content->getAllContent('type=3');
        $downnum=$content->getAllContent('type=4');
        $gbooknum=$gbook->count();
        $pagenum=$page->count();
        ;


        $ip='-';
        $this->assign('ip', $ip);
        $this->assign('liulan', '-');
        $this->assign('pronum', $pronum);
        $this->assign('articlenum', $articlenum);
        $this->assign('imgnum', $imgnum);
        $this->assign('downnum', $downnum);
        $this->assign('gbooknum', $gbooknum);
        $this->assign('pagenum', $pagenum);

        $this->assign('info', $info);
        return $this->fetch('index');
    }
}
