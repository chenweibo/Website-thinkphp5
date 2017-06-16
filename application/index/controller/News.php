<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Content;

class News extends Base
{


    protected $beforeActionList = [
        'first'
    ];

    protected function first()
    {
        $this->tongji();
    }


    public function index()
    {
        $content= new Content();
        $map['show']=1;
        $map['type']=2;
        $map['lid']=1;

        $list=$content->where($map)->order('id desc')->paginate(6);
        $this->assign('list',$list);
        return $this->fetch('news');
    }

    public function  newsView($id){

        $content= new Content();
        $data=Content::get($id);
        $content->click($id);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function  indusrtyView($id){

        $content= new Content();
        $data=Content::get($id);
        $content->click($id);
        $this->assign('data',$data);
        return $this->fetch();
    }


    public function indusrty()
    {
        $content= new Content();
        $map['show']=1;
        $map['type']=2;
        $map['lid']=2;

        $list=$content->where($map)->order('id desc')->paginate(6);
        $this->assign('list',$list);
        return $this->fetch();
    }




}
