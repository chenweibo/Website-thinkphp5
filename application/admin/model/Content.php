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



}
