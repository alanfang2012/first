<?php

//命名空间
namespace Admin\Controller;
use Tool\AdminController;//空间类元素引入

//后台"角色"控制器
class RoleController extends AdminController{
    //列表展示
    function showlist(){
        //获得全部角色信息
        $info = D('Role')->select();
        $this -> assign('info',$info);
        $this -> display();
    }
    
    //分配权限
    //params: $role_id被分配权限的角色id
    function distribute($role_id){
        $role = new \Model\RoleModel();
        
        if(!empty($_POST)){
            //收集表单信息
            $z = $role -> saveAuth($_POST['auth_id'],$_POST['role_id']);//在此方法实现ids和ac的制作并执行update语句
            if($z){
                $this ->success('分配权限成功！',U('showlist')); 
            }
        }
        //根据$role_id获得被分配权限的角色信息
        $role_info = $role->find($role_id);
        
        //把当前角色已经拥有的权限ids由“数字字符串”变为“数组”
        $auth_ids_arr = explode(',',$role_info['role_auth_ids']);
        
        //获得需要被设置的权限
        $auth = D('Auth');
        $auth_infoA = $auth -> where('auth_level=0')->select();
        $auth_infoB = $auth -> where('auth_level=1')->select();
        
        $this -> assign('auth_ids_arr',$auth_ids_arr);
        $this -> assign('role_info',$role_info);
        $this -> assign('auth_infoA',$auth_infoA);
        $this -> assign('auth_infoB',$auth_infoB);
        $this -> display();
    }

    function tianjia(){
        //通过 $role_id 获得被修改商品的相关信息
        $role = D('Role');
        if(!empty($_POST)){
            //收集表单
            $info = $role -> create();
            $z = $role -> add();
            if($z){
                $this -> redirect('showlist',array(),2,'添加角色成功！');
            }
        }
        $this -> display();
    }

    function upd($role_id){
        $role = new \Model\RoleModel();
        if(!empty($_POST)){
            //收集表单
            //show_bug($_POST);
            $info = $role -> create();

            $z =$role->where("role_id=$role_id")->save($info);
            if($z){
                $this -> redirect('showlist',array(),2,'修改角色成功！');
            }
        }
        
        $info = $role -> find($role_id);//通过一维数组返回一条记录信息
        $this -> assign('info',$info);
        $this -> display();
    }

    function del($role_id){
        $role = D('Role');
        $z=$role->where("role_id=$role_id")->delete(); 
        if($z){
                $this -> redirect('showlist',array(),2,'删除角色成功！');
        }
    }
}

