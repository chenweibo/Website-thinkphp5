<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\admin\model\Site;
use app\admin\model\Cate;
class Base extends Controller
{

  public function _initialize()
  {
    $cate= new Cate();

    $system=Site::get(1);
    $procate=$cate->where('cate_type=1 AND pid=0')->select();
    $this->assign('procate',$procate);
    $this->assign('system',$system);




  }

  public function tongji(){


       $file = 'tongji.db';
//$data = unserialize(file_get_contents($file));
      $fp=fopen($file,'r+');
      $content='';

      if (flock($fp,LOCK_EX)){
          while (($buffer=fgets($fp,1024))!=false){
              $content=$content.$buffer;
          }
          $data=unserialize($content);

//设置记录键值
          $total = 'total';
          $month = date('Ym');
          $today = date('Ymd');
          $yesterday = date('Ymd',strtotime("-1 day"));
          $tongji = array();
// 总访问增加
          $tongji[$total] = $data[$total] + 1;
// 本月访问量增加
          $tongji[$month] = $data[$month] + 1;
// 今日访问增加
          $tongji[$today] = $data[$today] + 1;
//保持昨天访问
          $tongji[$yesterday] = $data[$yesterday];

//保存统计数据
          ftruncate($fp,0); // 将文件截断到给定的长度
          rewind($fp); // 倒回文件指针的位置
          fwrite($fp, serialize($tongji));
          flock($fp,LOCK_UN);
          fclose($fp);

//输出数据
          $total = $tongji[$total];
          $month = $tongji[$month];
          $today = $tongji[$today];
          $yesterday = $tongji[$yesterday]?$tongji[$yesterday]:0;



          //echo "document.write('访总问 {$total}, 本月 {$month}, 昨日 {$yesterday}, 今日 {$today}');";

      }
  }
}
