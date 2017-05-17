<?php

namespace app\admin\model;

use think\Model;

class Cate extends Model
{
    protected $table = "cate";


    /**
     * 获得所有所属的分类
     * @param $param
     */

    public  function getCate($type){


      $result = db('cate')->where('cate_type',$type)->select();
      return $result;


    }

    /**
     * 插入分类信息
     * @param $param
     */
    public function insertCate($param)
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

    /**
     * 编辑分类信息
     * @param $param
     */
    public function editCate($param)
    {
        try{

            $result =  $this->save($param, ['id' => $param['id']]);

            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{

                return ['code' => 1, 'data' => '', 'msg' => '编辑角色成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }


}
