<?php

namespace app\admin\model;

use think\Model;

class Field extends Model
{
    protected $table = "field";


    public function insertType($param)
    {
        try{

            $result =  $this->save($param);
            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];
            }else{

                return ['code' => 1, 'data' => '', 'msg' => '添加角色成功'];
            }
        }catch( PDOException $e){

            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];
        }
    }


    public function getTypeByWhere($where, $offset, $limit)
    {
        return $this->where($where)->limit($offset, $limit)->order('id asc')->select();
    }

    public function getTypeWhere($where)
    {
        return $this->where($where)->order('id asc')->select();
    }



    public function getAllType($where)
    {
        return $this->where($where)->count();
    }


    public function delType($id)
    {
        try{

            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

    public function getonetype($id)
    {
        return $this->where('id', $id)->find();
    }



    public function editType($param)
    {
        try{

            $result =  $this->save($param, ['id' => $param['id']]);

            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{

                return ['code' => 1, 'data' => '', 'msg' => '编辑分类成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }


}
