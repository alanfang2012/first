<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 商品列表展示控制器
 */
class GroupController extends Controller{
    //商品列表展示
    function index(){

        $this -> display();
    }

    //商品详情查看
    function detail(){
//        $info = D('group')->find($gro_id);
//        $m_cat = new \Model\CategoryModel();
//        $brandList = $m_cat->getCatsParent($gro_id=30);
//        //showbug($parentList);
//        $this->assign('info',$info);
//        $this->assign('brandList',$brandList);
        $this -> display();
    }
}
