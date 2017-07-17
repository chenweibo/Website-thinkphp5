<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Wechat extends Controller
{
    public function _initialize()
    {
        $cache= cache('Access_token');
        if ($cache==false) {
            $data=$this->getAccess_token();


            cache('Access_token', $data, '7000');
        }

        $appid=config('wechat.appID');
        $appsecret=config('wechat.appsecret');
        $this->assign('appid', $appid);
        $this->assign('appsecret', $appsecret);
    }



    public function index()
    {
        $signature = $_GET["signature"];

        $timestamp = $_GET["timestamp"];

        $nonce = $_GET["nonce"];

        $token = config('wechat.token');

        $tmpArr = array($token, $timestamp, $nonce);

        sort($tmpArr, SORT_STRING);

        $tmpStr = implode($tmpArr);

        $tmpStr = sha1($tmpStr);

        if ($tmpStr == $signature) {
            header('content-type:text');

            echo $_GET["echostr"];
        } else {
            return false;
        }
    }

    public function wechatconfig()
    {
        if (request()->post()) {
            $param = request()->param();
            config([
                'appID'=>$param['appID'],
                'appsecret'=>$param['appsecret'],
                'token'=>$param['token']
            ]);

            return json(['code' => 1, 'data' => 1, 'msg' => "成功"]);
        }



        return $this->fetch();
    }


    public function getAccess_token()
    {
        $appid=config('wechat.appID');
        $appsecret=config('wechat.appsecret');

        $html = file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret);

        $result = json_decode($html, true);

        return $result['access_token'];
    }
}
