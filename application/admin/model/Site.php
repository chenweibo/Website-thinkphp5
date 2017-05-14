<?php

namespace app\admin\model;

use think\Model;

class Site extends Model
{
      protected $table = 'site';



    public function getslidecount($type){

        return $this->where('slide_type',$type)->count();

    }


    public function getSlideByWhere($where, $offset, $limit)
    {

        return $this->where($where)->limit($offset, $limit)->order('id asc')->field('id,slide_name,slide_sort,slide_img,slide_type')->select();
    }
        
}
