<?php

namespace Model;
use Think\Model;

//权限model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class AuthModel extends Model{
    //添加权限方法
    //$info = array(auth_name,auth_pid,auth_c,auth_a)
    function saveData($info){
        //战略：根据已有4个字段生成一个新记录
        //      根据新记录的相关信息计算制作path和level
        //      把制作好的path和level通过update语句给更新到记录里边
        $newid = $this -> add($info);  //生成一个新记录
        
        //制作path全路径
        if($info['auth_pid']==0){
            $path = $newid; //顶级权限全路径
        }else{
            //非顶级权限全路径
            $pinfo = $this -> find($info['auth_pid']);//获得父级权限信息
            $path = $pinfo['auth_path']."-".$newid;
        }
        
        //制作level等级
        //等级 ===== 全路径通过"-"分隔的数组元素个数减去1个的数目
        $level = count(explode('-',$path))-1;
        
        $sql = "update nm_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
        return $this -> execute($sql);
        
        // 不要通过如下方式执行update语句（$this的其他字段已经被上边代码给丰富起来了)
        //$this -> auth_id = $newid;
        //$this -> auth_path = $path;
        //$this -> auth_level = $level;
        //return $this -> save();
    }
}
