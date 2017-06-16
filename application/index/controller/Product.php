<?php

namespace app\index\controller;

use app\admin\model\Cate;
use think\Controller;
use think\Request;
use app\admin\model\Content;

class Product extends Base
{


    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {  $this->tongji();
        $request = request();
        $content= new Content();
        $cate=new Cate();
        $map['cate_type']=1;
        $cate=$cate->where($map)->select();
        $list=$content->where('type=1')->paginate(12);
        $this->assign('list',$list);
        $this->assign('cate',$cate);
        return $this->fetch('product');
    }

    public function productlist(){

        $request = request();

        $request = request();
        $content= new Content();
        $cate=new Cate();
        $map['type']=1;
        $data['cate_type']=1;
        $pcate=$cate->where($data)->select();
        $this->assign('cate',$pcate);

        $param=$request->param();
        if (isset($param['rewrite']) && !empty($param['rewrite'])) {

            $id=$cate->where('cate_rewrite',$param['rewrite'])->find();
            $map['lid'] =$id['id'];
            $list=$content->where($map)->paginate(12);
        }

        $this->assign('id',$id);
        $this->assign('list',$list);
        return $this->fetch();


    }


    public function productView(){
        $this->tongji();
        $cate=new Cate();
        $map['cate_type']=1;
        $cate=$cate->where($map)->select();
        $this->assign('cate',$cate);
        $request = Request::instance();
        $content= new Content();
        $param=$request->param();
        $data=$content->where('rewrite',$param['id'])->find();
        $cate=new Cate();
        $map['cate_type']=1;
        $map['id']=$data['lid'];
        $so=$cate->getCatewherefind($map);
        $img=codeimg($data['moreimg']);
        $this->assign('img',$img);
        $this->assign('so',$so);
        $this->assign('data',$data);

        return $this->fetch();

    }


}
