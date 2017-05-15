<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public  function uploads(){



        if(request()->isAjax()){

            $file = request()->file('image');



            $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){

                return $info->getSaveName();

            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }

        }
    }
}
