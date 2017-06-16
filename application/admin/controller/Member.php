<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Member as Membermodel;

class Member extends Base
{

    public function index()
    {

        $member= new Membermodel();
        if(request()->isAjax()){

            $param = input('param.');

            $limit = $param['pageSize'];
            $offset = ($param['pageNumber'] - 1) * $limit;

            $where = [];
            if (isset($param['searchText']) && !empty($param['searchText'])) {
                $where['content.name'] = ['like', '%' . $param['searchText'] . '%'];
            }

            $status = config('user_status');
            $selectResult = $member->getMemberByWhere($where, $offset, $limit);

            foreach($selectResult as $key=>$vo){

                $operate = [
                    '编辑' => url('Member/memberEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:memberDel('".$vo['id']."')"
                ];


                $selectResult[$key]['status'] = $status[$vo['status']];
                $selectResult[$key]['operate'] = showOperate($operate);


            }
            $return['total'] = $member->getAllMember($where);  //总数据
            $return['rows'] = $selectResult;

            return json($return);
        }

        return $this->fetch();

    }


    public function MumberAdd(){

        $member= new Membermodel();

        if(request()->isPost()){

            $param = input('param.');
            $param = parseParams($param['data']);
            $flag = $member->insertMember($param);
            return json(['code' => $flag['code'],  'data' => $flag['data'], 'msg' => $flag['msg']]);

        }

        return $this->fetch();

    }

   public function memberEdit(){
       $param = input('param.id');
       $member= new Membermodel();
       $data=$member->getonemember($param);
       $this->assign('data',$data);

       if(request()->isPost()) {

       $param = input('param.');
       $param = parseParams($param['data']);
       $flag = $member->editMember($param);
       return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

       }

       return $this->fetch();
   }



    public function memberDel(){


        $id = input('param.id');

        $member= new Membermodel();
        $flag = $member->delMember($id);

        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);


    }




}
