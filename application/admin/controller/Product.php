<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Cate;
use app\admin\Category;


class Product extends Controller
{

    public function cate(){


        $cate= new Cate();
        $a=$cate->getCate(1);


        if(request()->isAjax()){

            return make_tree($a);
        }

        return $this->fetch();
    }


    public function cateAdd(){

        $cate= new Cate();

        $create=Cate::all();
        $Category = new Category();
        $data=$Category::unlimitedForLever($create,'--');
        $this->assign('data',$data);

        if(request()->isPost()){


            $param = input('param.');
            $param = parseParams($param['data']);
            $param['pid']=explodepath($param['cate_path']);
            $flag = $cate->insertCate($param);

            return json(['code' => $flag['code'], 'data' => $flag['data'], 'msg' => $flag['msg']]);

        }

        return $this->fetch();
    }


    public function cateEdit(){




        return $this->fetch();
    }


    public function cateDel(){




        return $this->fetch();
    }








    public function contentlist(){




        return $this->fetch();
    }


    public function contentAdd(){



        return $this->fetch();

    }


    public function contentEdit(){



        return $this->fetch();

    }

    public function contentDel(){



        return $this->fetch();

    }







}
