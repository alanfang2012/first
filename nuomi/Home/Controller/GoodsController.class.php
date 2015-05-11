<?php

//命名空间
namespace Home\Controller;
use Think\Controller;

//前台商品控制器
//父类：Controller [ThinkPHP/Library/Think/Controller.class.php]
class GoodsController extends Controller{
    //商品列表展示
    function index(){
        $this -> display();
    }
    //商品详情查看
    function detail(){
        $this -> display();
    }
}
