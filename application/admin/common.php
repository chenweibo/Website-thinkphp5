<?php
/**
 * 生成操作按钮
 * @param array $operate 操作按钮数组
 */
function showOperate($operate = [])
{
    if(empty($operate)){
        return '';
    }
    $option = <<<EOT
<div class="btn-group">
    <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        操作 <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
EOT;

    foreach($operate as $key=>$vo){

        $option .= '<li><a href="'.$vo.'">'.$key.'</a></li>';
    }
    $option .= '</ul></div>';

    return $option;
}




/**
 * 将字符解析成数组
 * @param $str
 */
function parseParams($str)
{
    $arrParams = [];
    parse_str(html_entity_decode(urldecode($str)), $arrParams);
    return $arrParams;
}



function codeimg($str){


    $d=array_filter(explode('<img src="',$str));

    foreach ($d as  $key=>$vo) {

        $d[$key]=str_replace('">', '', $vo);

    }


   return $d;


}

/**
 * 子孙树 用于菜单整理
 * @param $param
 * @param int $pid
 */
function subTree($param, $pid = 0)
{
    static $res = [];
    foreach($param as $key=>$vo){

        if( $pid == $vo['pid'] ){
            $res[] = $vo;
            subTree($param, $vo['id']);
        }
    }

    return $res;
}


function make_tree($list,$pk='id',$pid='pid',$child='children',$root=0){
    $tree=array();
    $packData=array();
    foreach ($list as  $data) {
        $packData[$data[$pk]] = $data;
    }
    foreach ($packData as $key =>$val){
        if($val[$pid]==$root){//代表跟节点
            $tree[]=& $packData[$key];
        }else{
            //找到其父类
            $packData[$val[$pid]][$child][]=& $packData[$key];
        }
    }
    return $tree;
}

/**
 * 拆分PATH
 * @param $param
 * @return array
 */

function  explodepath($param){


    $str=explode('-',$param);
    $result=$str[count($str)-1];

    return $result;


}






/**
 * 整理菜单住方法
 * @param $param
 * @return array
 */
function prepareMenu($param)
{
    $parent = []; //父类
    $child = [];  //子类

    foreach($param as $key=>$vo){

        if($vo['typeid'] == 0){
            $vo['href'] = '#';
            $parent[] = $vo;
        }else{
            $vo['href'] = url($vo['control_name'] .'/'. $vo['action_name']); //跳转地址
            $child[] = $vo;
        }
    }

    foreach($parent as $key=>$vo){
        foreach($child as $k=>$v){

            if($v['typeid'] == $vo['id']){
                $parent[$key]['child'][] = $v;
            }
        }
    }
    unset($child);

    return $parent;
}

/**
 * 解析备份sql文件
 * @param $file
 */
//function analysisSql($file)
//{
//    // sql文件包含的sql语句数组
//    $sqls = array ();
//    $f = fopen ( $file, "rb" );
//    // 创建表缓冲变量
//    $create = '';
//    while ( ! feof ( $f ) ) {
//        // 读取每一行sql
//        $line = fgets ( $f );
//        // 如果包含空白行，则跳过
//        if (trim ( $line ) == '') {
//            continue;
//        }
//        // 如果结尾包含';'(即为一个完整的sql语句，这里是插入语句)，并且不包含'ENGINE='(即创建表的最后一句)，
//        if (! preg_match ( '/;/', $line, $match ) || preg_match ( '/ENGINE=/', $line, $match )) {
//            // 将本次sql语句与创建表sql连接存起来
//            $create .= $line;
//            // 如果包含了创建表的最后一句
//            if (preg_match ( '/ENGINE=/', $create, $match )) {
//                // 则将其合并到sql数组
//                $sqls [] = $create;
//                // 清空当前，准备下一个表的创建
//                $create = '';
//            }
//            // 跳过本次
//            continue;
//        }
//
//        $sqls [] = $line;
//    }
//    fclose ( $f );
//
//    return $sqls;
//}


function send_mail($tomail, $name, $subject = '', $body = '', $attachment = null) {
    $mail = new \PHPMailer();           //实例化PHPMailer对象
    $mail->CharSet = 'UTF-8';           //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
    $mail->IsSMTP();                    // 设定使用SMTP服务
    $mail->SMTPDebug = 0;               // SMTP调试功能 0=关闭 1 = 错误和消息 2 = 消息
    $mail->SMTPAuth = true;             // 启用 SMTP 验证功能
    $mail->SMTPSecure = 'ssl';          // 使用安全协议
    $mail->Host = "smtp.163.com"; // SMTP 服务器
    $mail->Port = 465;                  // SMTP服务器的端口号
    $mail->Username = "bbxcms@163.com";    // SMTP服务器用户名
    $mail->Password = "a563960993";     // SMTP服务器密码
    $mail->SetFrom('bbxcms@163.com', 'bbx');
    $replyEmail = '';                   //留空则为发件人EMAIL
    $replyName = '';                    //回复名称（留空则为发件人名称）
    $mail->AddReplyTo($replyEmail, $replyName);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($tomail, $name);
    if (is_array($attachment)) { // 添加附件
        foreach ($attachment as $file) {
            is_file($file) && $mail->AddAttachment($file);
        }
    }
    return $mail->Send() ? true : $mail->ErrorInfo;
}



