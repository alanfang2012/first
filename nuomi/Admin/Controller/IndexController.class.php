<?php

//命名空间
namespace Admin\Controller;
use Tool\AdminController;//空间类元素引入

//后台"索引"控制器
class IndexController extends AdminController{
    //头部
    function head(){
        C('SHOW_PAGE_TRACE',false);
        $this -> display();
    }
    //左侧
    function left(){
        //获得当前登录系统用户的具体权限信息
        //session('admin_id')----->role_id---->auth_ids
        //① 获得管理员信息
        $manager_info = D('Manager')->find(session('admin_id'));
        $role_id = $manager_info['mg_role_id'];
        //② 获得角色信息
        $role_info = D('Role')->find($role_id);
        $auth_ids = $role_info['role_auth_ids'];
        //③ 获得具体权限信息
        $auth = D('Auth');
        //admin超级管理员需要显示全部权限
        if(session('admin_name')==='admin'){
        $auth_infoA = $auth ->where("auth_level=0")-> select();
        $auth_infoB = $auth ->where("auth_level=1")-> select();
        }else{
        $auth_infoA = $auth ->where("auth_level=0 and auth_id in ($auth_ids)")-> select();
        $auth_infoB = $auth ->where("auth_level=1 and auth_id in ($auth_ids)")-> select();
        }
        $this -> assign('auth_infoA',$auth_infoA);
        $this -> assign('auth_infoB',$auth_infoB);
        $this -> display();
    }
    //右侧
    function right(){
        $this -> display();
    }
    //索引页
    function index(){
        $this -> display();
    }
}

