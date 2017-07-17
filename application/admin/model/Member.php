<?php

namespace app\admin\model;

use think\Model;

class Member extends Model
{
    protected $table = "member";



    public function getMemberByWhere($where, $offset, $limit)
    {
        return $this->where($where)->limit($offset, $limit)->order('id asc')->select();
    }

    public function getAllMember($where)
    {
        return $this->where($where)->count();
    }

    public function insertMember($param)
    {
        try {
            $result =  $this->validate('MemberValidate')->save($param);
            if (false === $result) {
                // 验证失败 输出错误信息
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
            } else {
                return ['code' => 1, 'data' => '', 'msg' => '添加成功'];
            }
        } catch (PDOException $e) {
            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
        }
    }


    public function editMember($param)
    {
        try {
            $result =  $this->validate('MemberValidate')->save($param, ['id' => $param['id']]);

            if (false === $result) {
                // 验证失败 输出错误信息
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            } else {
                return ['code' => 1, 'data' => '', 'msg' => '编辑成功'];
            }
        } catch (PDOException $e) {
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }


    public function delMember($id)
    {
        try {
            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];
        } catch (PDOException $e) {
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }



    public function getonemember($id)
    {
        return $this->where('id', $id)->find();
    }
}
