<?php

namespace app\index\controller;

use app\admin\controller\Images;
use app\admin\model\Content;
use think\Controller;
use think\Request;
use app\admin\model\PageModel;
use app\admin\model\Site;
use app\admin\model\Cate;

class Page extends Base
{

    protected $beforeActionList = [
        'first'
    ];

    protected function first()
    {
        $this->tongji();
    }

    public function about(){

       $page=new PageModel();
       $data=$page->getonePage(1);
       $this->assign('data',$data);


       return $this->fetch();
    }


    public function network(){

        $page=new PageModel();
        $data=$page->getonePage(3);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function planning(){

        $page=new PageModel();
        $data=$page->getonePage(4);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function books(){

        $page=new PageModel();
        $data=$page->getonePage(5);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function quarterly(){

        $page=new PageModel();
        $data=$page->getonePage(6);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function song(){

        $page=new PageModel();
        $data=$page->getonePage(7);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function contact(){

        $page=new PageModel();
        $data=$page->getonePage(8);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function honor(){

    $content=new Content();
    $map['type']=3;
    $map['show']=1;
    $list=$content->where($map)->select();
    $this->assign('list',$list);
    return $this->fetch();
}

    public function job(){

        $page=new PageModel();
        $data=$page->getonePage(2);
        $this->assign('data',$data);
        return $this->fetch();
    }




}
