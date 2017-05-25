<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Cate;
use app\admin\Category;
use app\admin\model\Content;



class Product extends Base
{

    public function cate(){


        $cate= new Cate();
        $a=$cate->getCate(1);


        if(request()->isAjax()){

            return make_tree($a);
        }

        return $this->fetch();
    }


    public function cateAdd(){

        $cate= new Cate();
        $create=Cate::all();
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $this->assign('data',$data);

        if(request()->isPost()){

        $param = input('param.');
        $param = parseParams($param['data']);
        $param['pid']=explodepath($param['cate_path']);
        $flag = $cate->insertCate($param);

        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

        }

        return $this->fetch();
    }


    public function cateEdit(){

        $cate= new Cate();
        $id=input('id');
        if(request()->isPost()){

        $param = input('param.');
        $param = parseParams($param['data']);
        $param['pid']=explodepath($param['cate_path']);
        $flag = $cate->editCate($param);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

        }

        $create=$cate::all();
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $view=$cate->getoneCate($id);
        $this->assign('view',$view);
        $this->assign('data',$data);

        return $this->fetch();
    }


    public function cateDel()
    {
        $id = input('param.id');

        $cate = new Cate();
        $flag = $cate->delCate($id);

        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

    }



    public function contentlist(){


        if(request()->isAjax()){

            $param = input('param.');

            $limit = $param['pageSize'];
            $offset = ($param['pageNumber'] - 1) * $limit;

            $where = [];
            if (isset($param['searchText']) && !empty($param['searchText'])) {
                $where['username'] = ['like', '%' . $param['searchText'] . '%'];
            }
            $where['type'] = 1;
            $content = new Content();
            $selectResult = $content->getContentByWhere($where, $offset, $limit);

            foreach($selectResult as $key=>$vo){


                $operate = [
                    '编辑' => url('Product/contentEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:contentDel('".$vo['id']."')"
                ];

                $check=$vo['show'];

                $selectResult[$key]['operate'] = showOperate($operate);




            }

            $return['total'] = $content->getAllContent($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }


      



        return $this->fetch();
    }


    public function contentAdd(){

        $content= new Content();
        $cate= new Cate();
        $create=Cate::all();
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $this->assign('data',$data);
         if(request()->isAjax()){

             $param = input('param.');
             $param = parseParams($param['data']);
             $param['lid']=explodepath($param['path']);
             $flag = $content->insertContent($param);
             return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

         }

        return $this->fetch();

    }


    public function contentEdit($id){

        $content= new Content();
        $cate= new Cate();
        $create=Cate::all();
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $view=Content::get($id);
        $img=codeimg($view['moreimg']);
        $this->assign('img',$img);
        $this->assign('view',$view);
        $this->assign('data',$data);
        $this->assign('ppp',$view['moreimg']);



        return $this->fetch();

    }

    public function contentDel(){



        return $this->fetch();

    }







}
