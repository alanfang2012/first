<?php

header("content-type:text/html;charset=utf-8");

//调试函数
function show_bug($info){
    echo "<pre style='color:red;'>";
    var_dump($info);
    echo "</pre>";
}

//给系统静态资源(img/css/js)文件目录设置常量
//前台Home
define('CSS_URL','/nuomi_one/nuomi/Public/css/');
define('IMG_URL','/nuomi_one/nuomi/Public/img/');
define('JS_URL','/nuomi_one/nuomi/Public/js/');
define('OTHER_URL','/nuomi_one/nuomi/Public/other/');
define('SITE_URL','/nuomi_one/nuomi/');
//后台Admin
define('ADMIN_CSS_URL','/nuomi_one/nuomi/Admin/Public/css/');
define('ADMIN_IMG_URL','/nuomi_one/nuomi/Admin/Public/img/');
define('ADMIN_JS_URL','/nuomi_one/nuomi/Admin/Public/js/');

//设置tp框架为“开发调试模式”(错误比较友好)
define('APP_DEBUG',true);//开发模式
//define('APP_DEBUG',false);//生产模式

//引用tp框架中的接口文件 ThinkPHP/ThinkPHP.php
include("../ThinkPHP/ThinkPHP.php");
ini_set("session.save_handler", "user");//设置PHP的SESSION由用户定义
