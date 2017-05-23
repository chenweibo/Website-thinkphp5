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


    public  function uploadsdown(){



        if(request()->isAjax()){



            $file = request()->file('down');



            $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){

                return $info->getSaveName();

            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }

        }
    }


    public  function uploadsedit(){



            $file = request()->file('img');



            $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){

                return '/uploads/'.$info->getSaveName();

            }else{
                // 上传失败获取错误信息
                return $file->getError();
            }




    }

    public  function uploadsmore(){


        $file = request()->file('image');



        $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            $data['status']  = 200;
            $data['msg']     = $info->getSaveName();

            //图片原始名字

            $data['details']['savename'] = $info->getSaveName();
            $data['details']['savepath'] = '/uploads/'.$info->getSaveName();

            return json($data);

        }else{
            // 上传失败获取错误信息
            return $file->getError();
        }




    }

   //删除文件
    public function filedelete($path=""){

           if(request()->isAjax())
           {
        $file="./uploads/".$path;

        if(unlink($file))
        {

            return ['code'=>1 , 'msg'=>"图片删除成功"];
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
