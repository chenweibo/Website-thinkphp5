<?php

namespace app\wechat\controller;

use think\Controller;
use think\Request;
use think\Cache;
class Common extends Controller
{


    public function _initialize()
    {

        $cache= cache('Access_token');
        if($cache==false)
        {
        $data=$this->getAccess_token();


           cache('Access_token', $data,'7000');

        }

        $appid=config('wechat.appID');
        $appsecret=config('wechat.appsecret');
        $this->assign('appid',$appid);
        $this->assign('appsecret',$appsecret);




    }


    public  function  getAccess_token(){

        $appid=config('wechat.appID');
        $appsecret=config('wechat.appsecret');

        $html = file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret);

        $result = json_decode($html, true);

        return $result['access_token'];


    }
}
