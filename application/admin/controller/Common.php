<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\pinyin1;

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



    public function routecteate($name){

        $str = preg_replace('/[^a-zA-Z0-9\x7f-\xff]+/','',$name);
        $ping =new pinyin1();
        $fy=$ping->pinyin($str);

        return $fy;

    }
}
