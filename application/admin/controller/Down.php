<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Cate;
use app\admin\Category;
use app\admin\model\Content;
use app\admin\model\Field;



class Down extends Base
{

    public function cate(){

        $cate= new Cate();
        $a=$cate->getCate(4);

        if(request()->isAjax()){

            return make_tree($a);
        }


        return $this->fetch();
    }


    public function cateAdd(){

        $cate= new Cate();
        $create=$cate->getCate(4);
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

        $create=$cate->getCate(4);
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
                $where['content.name'] = ['like', '%' . $param['searchText'] . '%'];
            }
            $where['type'] = 4;
            $content = new Content();
            $selectResult = $content->getContentByWhere($where, $offset, $limit);

            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('Down/contentEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:contentDel('".$vo['id']."')"
                ];

                if($vo['show']==1){

                    $show='<span class="glyphicon glyphicon-ok" onclick="showajax('.$vo['show'].')" aria-hidden="true"></span>';
                }
                else{

                    $show='<span class="glyphicon glyphicon-remove" onclick="showajax('.$vo['show'].')" aria-hidden="true"></span>';
                }

                if($vo['recommend']==1){

                    $recommend='<span class="glyphicon glyphicon-ok" onclick="reajax('.$vo['recommend'].')" aria-hidden="true"></span>';
                }
                else{

                    $recommend='<span class="glyphicon glyphicon-remove" onclick="reajax('.$vo['recommend'].')" aria-hidden="true"></span>';
                }
                if($vo['img']==null){

                    $img='<img src="/static/admin/images/img.png" width="30" height="30"> ';
                }
                else{

                    $img=' <img src="'.$vo['img'].'"  width="30" height="30"> ';
                }

                $selectResult[$key]['operate'] = showOperate($operate);
                $selectResult[$key]['img'] = $img;
                $selectResult[$key]['show'] = $show;
                $selectResult[$key]['recommend'] = $recommend;

            }
            $return['total'] = $content->getAllContent($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }

           $this->assign('tid',input('tid'));

           return $this->fetch();
    }


    public function contentAdd(){

        $content= new Content();
        $field= new Field();
        $cate= new Cate();
        $create=$cate->getCate(4);
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $type=$field->getTypeWhere('at_type=4');
        $this->assign('type',$type);
        $this->assign('data',$data);
        $this->assign('tid',input('tid'));

         if(request()->isPost()){

         $param = input('param.');
         $param = parseParams($param['data']);
         $param['lid']=explodepath($param['path']);
         $flag = $content->insertContent($param);
         return json(['code' => $flag['code'], 'tid' =>$param['lid'] , 'data' => $flag['data'], 'msg' => $flag['msg']]);

         }

        return $this->fetch();

    }


    public function contentEdit($id){

        $content= new Content();
        $cate= new Cate();
        $field= new Field();

        if(request()->isPost())
        {
        $param = input('param.');
        $param = parseParams($param['data']);
        $param['lid']=explodepath($param['path']);
        $flag = $content->editContent($param);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


        }
        $create=$cate->getCate(4);
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $view=Content::get($id);
        $img=codeimg($view['moreimg']);
        $type=$field->getTypeWhere('at_type=4');
        $this->assign('img',$img);
        $this->assign('view',$view);
        $this->assign('data',$data);
        $this->assign('type',$type);
        $this->assign('ppp',$view['moreimg']);



        return $this->fetch();

    }

    public function contentDel(){

        $id = input('param.id');

        $content = new Content();
        $flag = $content->delContent($id);

        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);



    }

    public function delajax($id){

        $content = new Content();
        $flag = $content->delmore($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

    }


    public function  type(){

        $field= new Field();
        if(request()->isAjax()){

            $param = input('param.');

            $limit = $param['pageSize'];
            $offset = ($param['pageNumber'] - 1) * $limit;

            $where = [];
            if (isset($param['searchText']) && !empty($param['searchText'])) {
                $where['content.name'] = ['like', '%' . $param['searchText'] . '%'];
            }
            $where['at_type'] = 4;

            $selectResult = $field->getTypeByWhere($where, $offset, $limit);
            $catelist=[1=>'纯文本', 2=>'富文本' ,3=>'单文件'];
            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('Down/typeEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:typeDel('".$vo['id']."')"
                ];
                $catename=$catelist[$vo['fieldname']];
                $selectResult[$key]['operate'] = showOperate($operate);
                $selectResult[$key]['catename'] = $catename;

            }
            $return['total'] = $field->getAllType($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }



        return $this->fetch();
    }

    public function typeadd(){

          $field= new Field();
          $content = new Content();
         if(request()->isPost()){

          $param = input('param.');
          $param = parseParams($param['data']);
          $flag = $field->insertType($param);
          $content->addtablefield($param['the_column'],$param['fieldname']);
          return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


         }

        $this->assign('at_type',input('type'));
        return $this->fetch();

    }

    public function  typeEdit(){

        $id = input('param.id');
        $field= new Field();
        $content = new Content();

        if(request()->isPost()){

            $param = input('param.');
            $param = parseParams($param['data']);

            $flag = $field->editType($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


        }

        $view=$field->getonetype($id);
        $this->assign('view',$view);
        return $this->fetch();
    }



    public function typeDel(){

        $id = input('param.id');

        $field= new Field();
        $content = new Content();
        $com=$field->getonetype($id);
        $content->deltablefield($com['the_column']);
        $flag = $field->delType($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);



    }



}
