<?php

namespace Model;
use Think\Model;

//会员model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{
    // 是否批处理验证
    protected $patchValidate    =   true;
    
    //给用户注册页面制作表单验证规则
    // 自动验证定义
    protected $_validate        =   array(
        //array(验证字段，验证规则，错误提示[，验证条件，附加规则，验证时间]),
        
        //① 用户名必须填写
        array('user_name','require','用户名必须填写'),
        //用户名不能重复
        array('user_name','','用户名已经存在',0,'unique'),
        
        //② 密码必须填写
        array('user_pswd','require','密码必须填写'),
        array('user_pswd','6,14','密码必须是6-14位之间',0,'length'),

        //③ 验证码校验
        //array('verifyCode','require','验证码必须填写'),
        //array('verifyCode','$secode','验证码不正确',0,'confirm'),        
    );
    
    //字段自动完成定义
    // 自动完成定义
    protected $_auto            =   array(
        //array(完成字段1,完成规则,[完成条件,附加规则]),
        array('user_time','time',1,'function'), //通过time函数在数据新增的时候把user_time字段给丰富出来
        //array('last_time','time',2,'function'), //通过time函数在数据编辑的时候把last_time字段给丰富出来
        array('last_time','user_time',1,'field'), //数据新增的时候把user_time字段内容也复制给last_time一份
    );

    function checkNamePwd($name,$pwd){
        //先验证用户名
        $info = $this -> where("user_name='$name'")->find();
        if($info!==null){
            //后校验密码
            if($info['user_pswd']===$pwd){
                return $info;
            }
        }
        return false;
    }
}
