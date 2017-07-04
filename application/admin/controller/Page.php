<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\PageModel;
use app\admin\model\Field;
class Page extends Base
{


    public function index()
    {
        if(request()->isAjax()){

            $param = input('param.');
            $limit = $param['pageSize'];
            $offset = ($param['pageNumber'] - 1) * $limit;

            $where = [];
            if (isset($param['searchText']) && !empty($param['searchText'])) {
                $where['content.name'] = ['like', '%' . $param['searchText'] . '%'];
            }

            $page = new PageModel();
            $selectResult = $page->getPageByWhere($where, $offset, $limit);

            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('page/pageEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:pageDel('".$vo['id']."')"
                ];

                $selectResult[$key]['operate'] = showOperate($operate);

            }
            $return['total'] = $page->getAllPage($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }

       return $this->fetch();
    }


    public function pageAdd(){


        $field= new Field();
        $page = new PageModel();
        $type=$field->getTypeWhere('at_type=6');
        $this->assign('type',$type);

        if(request()->isPost()){


            $param = request()->param();
            $flag = $page->insertPage($param);
            return json(['code' => $flag['code'],  'data' => $flag['data'], 'msg' => $flag['msg']]);

        }
        return $this->fetch();

    }


    public function pageEdit($id){

        $field= new Field();
        $page = new PageModel();

        if(request()->isPost())
        {

            $param = request()->param();
            $flag = $page->editPage($param);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


        }
        $view=PageModel::get($id);

        $type=$field->getTypeWhere('at_type=6');

        $this->assign('view',$view);

        $this->assign('type',$type);




        return $this->fetch();

    }

    public function pageDel(){

        $id = input('param.id');
        $page = new PageModel();
        $flag = $page->delPage($id);
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
            $where['at_type'] = 6;

            $selectResult = $field->getTypeByWhere($where, $offset, $limit);
            $catelist=[1=>'纯文本', 2=>'富文本' ,3=>'单文件'];
            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('Page/typeEdit', ['id' => $vo['id']]),
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
        $page = new PageModel();
        if(request()->isPost()){

            $param = input('param.');
            $param = parseParams($param['data']);
            $flag = $field->insertType($param);
            $page->addPagefield($param['the_column'],$param['fieldname']);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


        }

        $this->assign('at_type',input('type'));
        return $this->fetch();

    }

    public function  typeEdit(){

        $id = input('param.id');
        $field= new Field();
        $page = new PageModel();

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
        $page = new PageModel();
        $com=$field->getonetype($id);
        $page->delPagefield($com['the_column']);
        $flag = $field->delType($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);



    }



}
