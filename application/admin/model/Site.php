<?php

namespace app\admin\model;

use think\Model;

class Site extends Model
{
      protected $table = 'site';



    public function getslidecount($type){

        return $this->where('slide_type',$type)->count();

    }


    public function getSlideByWhere($where, $offset, $limit)
    {

        return $this->where($where)->limit($offset, $limit)->order('id asc')->field('id,slide_name,slide_sort,slide_img,slide_type')->select();
    }

    public  function insertslide($param){


        try{

            $result =  $this->save($param);
            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => -1, 'data' => '', 'msg' => $this->getError()];

            }else{

                return ['code' => 1, 'data' => '', 'msg' => '插入幻灯片'];

            }
        }catch( PDOException $e){

            return ['code' => -2, 'data' => '', 'msg' => $e->getMessage()];

        }


    }
    public  function getsilidewhere($where){


        return $this->where($where)->order('slide_sort asc')->select();
    }


    public function editslide($param)
    {
        try{

            $result =  $this->save($param, ['id' => $param['id']]);

            if(false === $result){
                // 验证失败 输出错误信息
                return ['code' => 0, 'data' => '', 'msg' => $this->getError()];
            }else{

                return ['code' => 1, 'data' => '', 'msg' => '编辑幻灯片成功'];
            }
        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }



    public function getoneslide($id)
    {
        return $this->where('id', $id)->find();
    }


    public function delslide($id)
    {
        try{

            $this->where('id', $id)->delete();
            return ['code' => 1, 'data' => '', 'msg' => '删除幻灯片成功'];

        }catch( PDOException $e){
            return ['code' => 0, 'data' => '', 'msg' => $e->getMessage()];
        }
    }
        
}
