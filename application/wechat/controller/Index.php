<?php
namespace app\wechat\controller;


use think\Controller;
use think\Request;
use think\Cache;

class Index extends Common
{

    public function index()
    {



        return $this->fetch();

        }


    public function wechatconfig(){




    }



        const TOKEN = 'bbx6';
        public  function  peizhi(){



        $signature = $_GET["signature"];

        $timestamp = $_GET["timestamp"];

        $nonce = $_GET["nonce"];

        $token = self::TOKEN;

        $tmpArr = array($token, $timestamp, $nonce);

        sort($tmpArr, SORT_STRING);

        $tmpStr = implode( $tmpArr );

        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){

           header('content-type:text');

            echo $_GET["echostr"];

        }else{

            return false;

        }


        }


        
        public function code(){

            $code=$_GET['code'];
            $htmlaccess_token = file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".config('wechat.appID')."&secret=".config('wechat.appsecret')."&code=".$code."&grant_type=authorization_code");
            $result = json_decode($htmlaccess_token, true);
            $z=$result['access_token'];
            $openid=$result['openid'];
            $info = file_get_contents("https://api.weixin.qq.com/sns/userinfo?access_token=".$z."&openid=".$openid."&lang=zh_CN");

            return $info;

}


}
