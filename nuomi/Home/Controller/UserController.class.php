<?php

//命名空间
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

//前台用户控制器
//父类：Controller [ThinkPHP/Library/Think/Controller.class.php]
class UserController extends Controller{
    //登录系统
    function login(){
        //验证管理员信息
        if(!empty($_POST)){
            $user=new \Model\UserModel();
            $info=$user->checkNamePwd($_POST['userName'],$_POST['password']);
            if($info){
                //$_SESSION['admin'] = $info;
                session('admin_id',$info['user_id']);
                session('admin_name',$info['user_name']);
                
                //show_bug($_SESSION['admin_name']);
                //show_bug(session_save_path());
                $this->redirect('Index/index');
            }else{
                echo '用户名或密码不正确';
            }
        }
        //调用view视图模板
        $this -> display();           //视图模板名称与当前操作login一致
    }

    //退出系统
    function logout(){
        session(null);//session_destroy()清空session
        $this -> redirect('User/login');
    }

    //注册系统
    function register(){
        $user = new \Model\UserModel();
        if(!empty($_POST)){
            $rst = $user -> create();
            $this-> assign('errorInfo',$user -> getError());
            $code=I('post.verifyCode');//验证验证码，该验证必须放在控制器中，因为码值是存放在session里的
            $vry = new Verify();
            if($vry -> check($code)){
                if($rst){
                    $z = $user -> add($rst);
                    session('admin_name',$rst['user_name']);
                    if($z){
                        $this -> redirect('Index/index');
                    }
                } 
            }else{
                $this-> assign('errorCode','验证码不正确');
            }
        }
        $this -> display();
    }

    //验证图片效果制作
    function verifyImg(){
        $cfg = array(
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  150,               // 验证码图片宽度
            'fontSize'  =>  20,              // 验证码字体大小(px)
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        //实例化Think/Verify
        //$very = new \Think\Verify();  //完全限定名称方式实例化
        $very = new Verify($cfg);  //空间类元素引入 方式实例化
        echo $very -> entry();
        
    }
}
