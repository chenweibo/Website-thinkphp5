<?php

namespace app\admin\model;

use think\Model;

class Gbook extends Model
{
    protected $table = "gbook";


    public function delGbook($id)
    {
        try{

            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

    public function getGbookByWhere($where, $offset, $limit)
    {
        return $this->where($where)->limit($offset, $limit)->order('id asc')->select();
    }

    public function getAllGbook($where)
    {
        return $this->where($where)->count();
    }

    public  function delmore($id){

        try{

            $this->destroy($id);
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }


    }

    public  function getonegbook($id){



        return $this->where('id', $id)->find();

    }

    public  function addgbookfield($str,$type){


        try{
            if($type==2){

                $this->query("alter table gbook add $str mediumtext ;");
                return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];
            }
            else{

                $this->query("alter table gbook add $str varchar(255) ;");
                return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];
            }


        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }

    }

    public  function delgbookfield($str){


        try{

            $this->query("alter table gbook drop column $str ;");
            return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }

    }


    public function insertGbook($param)
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

}
