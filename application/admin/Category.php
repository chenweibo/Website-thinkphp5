<?php 

namespace app\admin;

class Category



    {


      Static  Public function unlimitedForLever($cate ,$html = '--' ,$pid=0 , $level = 0){             



                



                 $arr=array();



                 foreach ($cate as $v) {



                 	if ($v['pid'] == $pid){



                         $v['level'] = $level + 1;



                         $v['html'] = str_repeat($html, $level);



                         $arr[] = $v ;



                         $arr = array_merge($arr ,self::unlimitedForLever($cate , $html, $v['id'], $level+1));



                 	}



                  	# code...



                 }            



                      return $arr;



          }









           Static  Public function unlimitedForLayer($cate ,$pid='0'){             



                



                 $arr=array();



                 foreach ($cate as $v) {



                  if ($v['pid'] == $pid){



                      



                         $arr[] = $v ;



                         $arr = array_merge($arr ,self::unlimitedForLayer($cate,$v['id']));



                  }



                    # code...



                 }            



                      return $arr;



          }

          



       Static  Public function unlimitedForParents($cate ,$cid){             



                



                 $arr=array();



                 foreach ($cate as $v) {



                  if ($v['id'] == $cid){



                      



                         $arr[] = $v['name'] ;



                         $arr = array_merge($arr ,self::unlimitedForParents($cate,$v['pid']));



                  }



                    # code...



                 }            



                      return $arr;



          }

          



           Static  Public function unlimitedForChild($cate ,$pid='0'){             



                



                 $arr=array();



                 foreach ($cate as $v) {



                  if ($v['pid'] == $pid){



                      



                         $arr[] = $v ;



                         $arr = array_merge($arr ,self::unlimitedForChild($cate,$v['id']));



                  }



                    # code...



                 }            



                      return $arr;



          }

          









        











      }







