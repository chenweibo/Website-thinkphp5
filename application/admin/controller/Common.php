<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\pinyin1;
use app\admin\model\Content;

class Common extends Controller
{


    public function _initialize()
    {
        if(empty(session('username'))){

            $this->redirect(url('login/index'));
        }


    }
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


    public  function uploadsother(){






             $type=input('type');
             $file = request()->file($type);
            $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){

                return $info->getSaveName();

            }else{
                // 上传失败获取错误信息
                return $file->getError();
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



         $files = request()->file('file');





            $info = $files->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');

            if($info){
              $img='/uploads/'.$info->getSaveName();
                return $img;

            }else{
                // 上传失败获取错误信息
                return $files->getError();
            }




    }

    public  function uploadt(){


        $data=[];
        $files = request()->file('img');

        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg

                $data[]='/uploads/'. $info->getFilename();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }


//
//            $info = $files->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
//
//            if($info){
//              $img='/uploads/'.$info->getSaveName();
//                return json(['errno'=>'0', 'data'=>[$img]]);
//
//            }else{
//                // 上传失败获取错误信息
//                return $files->getError();
//            }

        return json(['errno'=>'0', 'data'=>$data]);


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
