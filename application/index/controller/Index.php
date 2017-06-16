<?php
namespace app\index\controller;
use app\admin\model\Content;
use app\admin\model\Site;
use think\Controller;
use think\Request;
class Index extends Base
{


    public function index()
    {
        $content= new Content();
        $slide= new Site();
        $sli=$slide->getsilidewhere('slide_type=1');
        $sli2=$slide->getsilidewhere('slide_type=2');
        $map['recommend']=1;
        $product=$content->getproduct($map,'id asc',4);
        $data1['lid']=2;
        $data['lid']=1;
        $data['recommend']=['neq',1];
        $data1['recommend']=['neq',1];
        $article=$content->getarticle($data,'id desc','4');
        $article1=$content->getarticle($data1,'id desc','4');
        $art=['lid'=>1,'recommend'=>1,'show'=>1,'type'=>2];
        $art1=['lid'=>2,'recommend'=>1,'show'=>1,'type'=>2];
        $toparticle=$content->where($art)->limit(1)->find();
        $toparticle1=$content->where($art1)->limit(1)->find();
        $this->assign('toparticle1',$toparticle1);
        $this->assign('toparticle',$toparticle);
        $this->assign('article',$article);
        $this->assign('article1',$article1);
        $this->assign('product',$product);
        $this->assign('slide',$sli);
        $this->assign('p1',$sli2);
        return $this->fetch();
    }


    public function sentmail(){


      $toemail='563960993@qq.com';
      $name='bbx';
      $subject='感谢你注册我们的网站';
      $content='恭喜你，出册成功。';
      send_mail($toemail,$name,$subject,$content);

    }

    public  function  search(){

        $content= new Content();
        $map['type']=1;
        $map['show']=1;
        $map['name']=['like','%'.input('keys').'%'];
        $list=$content->where($map)->select();
        $this->assign('list',$list);

        return $this->fetch();

    }
}
