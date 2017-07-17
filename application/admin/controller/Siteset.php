<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Site;

class Siteset extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        if (request()->isAjax()) {
            $list=Db::table('site')->where('id', 1)->find();
            return $list;
        }
        return $this->fetch();
    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        if (request()->isPost()) {
            $param = input('param.');
            $param = parseParams($param['data']);
            $result= Db::table('site')
            ->where('id', 1)
            ->update($param);
            if ($result) {
                return ['code' => 1,'msg'=>"成功"];
            } else {
                return ['code' => 0,'msg'=>"失败"];
            }
        }
    }

    public function slide()
    {
        if (request()->isAjax()) {
            $site= new Site();
            $param = input('param.');

            $limit = $param['pageSize'];
            $offset = ($param['pageNumber'] - 1) * $limit;
            $where['slide_type']=$param['type'];
            $return['total'] = $site->getslidecount($param['type']);  //总数据
            $selectResult=$site->getSlideByWhere($where, $offset, $limit);
            foreach ($selectResult as $key=>$vo) {
                $operate = [
                    '编辑' => url('siteset/slideEdit', ['id' => $vo['id']]),
                    '删除' => "javascript:slideDel('".$vo['id']."')"
                ];

                $selectResult[$key]['operate'] = showOperate($operate);
            }
            $return['rows'] = $selectResult;
            return $return;
        }
        return $this->fetch();
    }


    public function slideAdd()
    {
        if (request()->isPost()) {
            $site= new Site();
            $param = input('param.');
            $param = parseParams($param['data']);
            $flag = $site->insertslide($param);

            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }
        $this->assign('type', input('type'));
        return $this->fetch();
    }




    public function slideEdit()
    {
        $site= new Site();
        if (request()->isPost()) {
            $param = input('post.');
            $param = parseParams($param['data']);
            $flag = $site->editslide($param);

            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
        }

        $id=input('param.id');
        $this->assign([
        'id'=> $id,
        'slide' =>$site->getoneslide($id)
        ]);
        return $this->fetch();
    }


    public function slideDel()
    {
        $id = input('param.id');

        $site = new Site();
        $flag = $site->delslide($id);
        return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);
    }
}
