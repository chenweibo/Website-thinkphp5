<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Cate;


class Product extends Controller
{

    public function cate(){


        $cate= new Cate();
        $a=$cate->getCate(1);


        if(request()->isAjax()){




            return make_tree($a);
        }


    //dump(make_tree($a));
//        $this->assign('data',$data);
        return $this->fetch();
    }


    public function cateAdd(){




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
