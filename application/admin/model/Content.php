<?php

namespace app\admin\model;

use think\Model;

class Content extends Model
{
    protected $table = "content";


    public function insertContent($param)
    {
        try{

            $result =  $this->validate('ContentValidate')->save($param);
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


    public function getContentByWhere($where, $offset, $limit)
    {
        return $this->field('content.*,cate.name as catename')
            ->join('cate', 'content.lid = cate.id')
            ->where($where)->limit($offset, $limit)->order('id asc')->select();
    }


    public function getAllContent($where)
    {
        return $this->where($where)->count();
    }



    public function editContent($param)
    {
        try{

            $result =  $this->validate('ContentValidate')->save($param, ['id' => $param['id']]);

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


    public function delContent($id)
    {
        try{

            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }

     public  function delmore($id){

         try{

             $this->destroy($id);
             return ['code' => 1, 'data' => '', 'msg' => '删除成功'];

         }catch( PDOException $e){
             return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
         }

     }

     public  function addtablefield($str){


         try{

             $this->query("alter table content add $str varchar(255) ;");
             return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];

         }catch( PDOException $e){
             return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
         }

     }

    public  function deltablefield($str){


        try{

            $this->query("alter table content drop column $str ;");
            return ['code' => 1, 'data' => '', 'msg' => '添加'.$str.'成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }

    }
}
