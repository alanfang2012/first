<?php

namespace Model;
use Think\Model;

//角色model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class RoleModel extends Model{
    //给角色分配权限，ids和ac处理制作
    //更新角色信息
    function saveAuth($auth_id,$role_id){
        //① auth_ids处理制作
        $auth_ids = implode(',',$auth_id); //数组变为字符串
        //② auth_ac处理制作
        $auth_info = D('Auth') -> select($auth_ids);
        $ac = "";
        foreach($auth_info as $k => $v){
            if(!empty($v['auth_c']) && !empty($v['auth_a']))
                $ac .= $v['auth_c']."-".$v['auth_a'].",";
        }
        $ac = trim($ac,',');

        $this -> role_id = $role_id;
        $this -> role_auth_ids = $auth_ids;
        $this -> role_auth_ac = $ac;
        return $this -> save();
    }
}
