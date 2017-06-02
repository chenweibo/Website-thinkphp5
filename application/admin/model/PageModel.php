<?php

namespace app\admin\model;

use think\Model;

class PageModel extends Model
{
    protected $table = "page";

    public function delPage($id)
    {
        try{

            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

    public function getPageByWhere($where, $offset, $limit)
    {
        return $this->where($where)->limit($offset, $limit)->order('id asc')->select();
    }

    public function getAllPage($where)
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

    public  function getonePage($id){



        return $this->where('id', $id)->find();

    }

    public  function addPagefield($str,$type){


        try{
            if($type==2){

                $this->query("alter table page add $str mediumtext ;");
                return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];
            }
            else{

                $this->query("alter table page add $str varchar(255) ;");
                return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];
            }


        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }

    }

    public  function delPagefield($str){


        try{

            $this->query("alter table page drop column $str ;");
            return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }

    }


    public function insertPage($param)
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


    public function editPage($param)
    {
        try{

            $result =  $this->save($param, ['id' => $param['id']]);

            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{

                return ['code' => 1, 'data' => '', 'msg' => '编辑成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
}
