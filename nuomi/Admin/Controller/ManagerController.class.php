<?php

//命名空间
namespace Admin\Controller;
use Tool\AdminController;//空间类元素引入
use Think\Verify; //空间类元素引入
//后台"管理员"控制器
class ManagerController extends AdminController{
    //管理员登录
    function login(){
        if(!empty($_POST)){
            //if($_POST['captcha']===$_SESSION['verify_code'])
            //校验验证码
            $vry = new Verify();
            if($vry -> check($_POST['captcha'])){ //加密用户输入验证码 并和session验证码比较
                //校验用户名、密码
                $manager = new \Model\ManagerModel();
                $info = $manager -> checkNamePwd($_POST['admin_user'],$_POST['admin_psd']);
                if($info){
                    session('admin_id',$info['mg_id']);
                    session('admin_name',$info['mg_name']);
                    //页面跳转到后台“品”字首页面
                    $this -> redirect('Index/index');
                }else
                    echo "用户名或密码不正确";
            }else
                echo "验证码错误";
        }
        $this -> display();
    }
    
    //退出系统
    function logout(){
        session(null);//session_destroy()清空session
        $this -> redirect('Manager/login');
    }
    
    //验证图片效果制作
    function verifyImg(){
        $cfg = array(
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  100,               // 验证码图片宽度
            'fontSize'  =>  15,              // 验证码字体大小(px)
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
        );
        //实例化Think/Verify
        //$very = new \Think\Verify();  //完全限定名称方式实例化
        $very = new Verify($cfg);  //空间类元素引入 方式实例化
        echo $very -> entry();
    }

    function showlist(){
        $total = D('Manager')->count();  //获得记录总条数  sum()  avg()
        $per = 7;
        
        $page = new \Tool\Page($total,$per);
        
        $sql = "select * from nm_manager order by mg_id desc ".$page->limit;
        $info = D()->query($sql);  //返回二维数组信息结果
        
        $pagelist = $page -> fpage(array(3,4,5,6,7,8));
        
        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
    }

    function tianjia(){
        //限制
        //$mg = D('Manager');
        $mg = new \Model\ManagerModel();
        //两个逻辑：表单展示、收集表单
        if(!empty($_POST)){
            //收集表单信息、存储到数据库、页面跳转
            //通过create方法实现数据收集
            //除此该方法还有 表单验证、自动完成、非法字段过滤的作用
            $info = $mg -> create();
            $z = $mg -> add();
            if($z){
               $this -> redirect('showlist',array(),2,'添加管理员成功！'); 
            }
        }    
        $this -> display();
    }

    function upd($mg_id){
        $mg = new \Model\ManagerModel();
        if(!empty($_POST)){
            //收集表单
            $info = $mg -> create();
            $z =$mg->where("mg_id=$mg_id")->save($info); 
            //$z = $mg -> save();
            if($z){
                $this -> redirect('showlist',array(),2,'修改管理员成功！');
            }
        }
        
        $info = $mg -> find($mg_id);//通过一维数组返回一条记录信息
        $this -> assign('info',$info);
        $this -> display();
    }

    function del($mg_id){
        $mg = D('Manager');
        $z=$mg->where("mg_id=$mg_id")->delete(); 
        if($z){
                $this -> redirect('showlist',array(),2,'删除管理员成功！');
        }
    }
}

