<?php

//命名空间
namespace Admin\Controller;
use Tool\AdminController;//空间类元素引入

//后台"权限"控制器
class AuthController extends AdminController{
    //列表展示
    function showlist(){
        //限制
        //获得全部权限信息
        $info = D('Auth')->order('auth_path')->select();
        $this -> assign('info',$info);
        $this -> display();
    }
    
    //添加权限
    function tianjia(){
        $auth = new \Model\AuthModel();
        if(!empty($_POST)){
            $info = $auth->create();
            $z = $auth -> saveData($info); //制作path和level
            if($z)
                $this -> redirect('showlist',array(),2,'添加权限成功！');
        }
        
        //获得被选取的父级(顶级)权限
        $auth_infoA = $auth->where('auth_level=0')->select();
        
        $this -> assign('auth_infoA',$auth_infoA);
        $this -> display();
    }

    function upd($auth_id){
        $auth = new \Model\AuthModel();
        if(!empty($_POST)){
            //收集表单
            $info = $auth -> create();
            $z =$auth->where("auth_id=$auth_id")->save($info); 
            //$z = $auth -> save();
            if($z){
                $this -> redirect('showlist',array(),2,'修改权限成功！');
            }
        }
        
        $info = $auth -> find($auth_id);//通过一维数组返回一条记录信息
        $this -> assign('info',$info);

        //获得被选取的父级(顶级)权限
        $auth_infoA = $auth->where('auth_level=0')->select();
        $this -> assign('auth_infoA',$auth_infoA);

        // if($info.auth_level!=0){
        //     $arr=explode('-',$info.auth_path);
        //     $pinfo.auth_id=$arr[0];
        // }
        // $this -> assign('pinfo.auth_id',$pinfo.auth_id);

        $this -> display();
    }

    function del($auth_id){
        $auth = D('Auth');
        $z=$mg->where("auth_id=$auth_id")->delete(); 
        if($z){
                $this -> redirect('showlist',array(),2,'删除权限成功！');
        }
    }
}

