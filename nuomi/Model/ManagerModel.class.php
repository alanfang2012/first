<?php

namespace Model;
use Think\Model;

//管理员model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class ManagerModel extends Model{
    //用户名和密码校验
    function checkNamePwd($name,$pwd){
        //先验证用户名
        $info = $this -> where("mg_name='$name'")->find();
        if($info!==null){
            //后校验密码
            if($info['mg_pwd']===$pwd){
                return $info;
            }
        }
        return false;
    }

    //字段自动完成定义
    //自动完成定义
    protected $_auto            =   array(
        //array(完成字段1,完成规则,[完成条件,附加规则]),
        array('mg_time','time',1,'function'), 
    );

}
