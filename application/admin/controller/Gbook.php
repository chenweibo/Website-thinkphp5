<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Gbook as GbookModel;
use app\admin\model\Field;


class Gbook extends Base
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

            $GbookModel = new GbookModel();
            $selectResult = $GbookModel->getGbookByWhere($where, $offset, $limit);

            foreach($selectResult as $key=>$vo){

                $operate = [
                    '查看' => url('gbook/gbookread', ['id' => $vo['id']]),
                    '删除' => "javascript:gbookDel('".$vo['id']."')"
                ];

                $selectResult[$key]['operate'] = showOperate($operate);

            }
            $return['total'] = $GbookModel->getAllGbook($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }
        return $this->fetch();
    }


     public function gbookread($id){

         $field= new Field();
         $GbookModel = new GbookModel();
         $data=$GbookModel->getonegbook($id);
         $type=$field->getTypeWhere('at_type=5');
         $this->assign('data',$data);
         $this->assign('type',$type);

         return $this->fetch();
     }

    public function gbookDel(){

        $id = input('param.id');
        $GbookModel = new GbookModel();
        $flag = $GbookModel->delGbook($id);
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
            $where['at_type'] = 5;

            $selectResult = $field->getTypeByWhere($where, $offset, $limit);
            $catelist=[1=>'纯文本', 2=>'富文本' ,3=>'单文件'];
            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('Gbook/typeEdit', ['id' => $vo['id']]),
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
        $GbookModel = new GbookModel();
        if(request()->isPost()){

            $param = input('param.');
            $param = parseParams($param['data']);
            $flag = $field->insertType($param);
            $GbookModel->addgbookfield($param['the_column'],$param['fieldname']);
            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


        }

        $this->assign('at_type',input('type'));
        return $this->fetch();

    }

    public function  typeEdit(){

        $id = input('param.id');
        $field= new Field();
        $GbookModel = new GbookModel();

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
        $GbookModel = new GbookModel();
        $com=$field->getonetype($id);
        $GbookModel->delgbookfield($com['the_column']);
        $flag = $field->delType($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);



    }


}
