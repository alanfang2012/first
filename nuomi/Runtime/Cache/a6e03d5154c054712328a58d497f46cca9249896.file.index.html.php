<?php /* Smarty version Smarty-3.1.6, created on 2015-05-05 19:17:23
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19149554862d7e8c990-23076901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e03d5154c054712328a58d497f46cca9249896' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Index\\index.html',
      1 => 1430824635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19149554862d7e8c990-23076901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554862d7ee674',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554862d7ee674')) {function content_554862d7ee674($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--
            每个frame的src属性值需要设置"独立的路由"请求
            例如：http://web.0303.com/shop/index.php/Admin/Index/head
                  http://web.0303.com/shop/index.php/Admin/Index/left
                  http://web.0303.com/shop/index.php/Admin/Index/right
                  否则其会受到pathinfo路径路由的“影响”
        
            tp框架模板有自动替换地址，会把<?php echo @__CONTROLLER__;?>
自动替换为具体常量信息
            因此如下可以直接设置<?php echo @__CONTROLLER__;?>

        -->
        <frame name=head src="<?php echo @__CONTROLLER__;?>
/head.html" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="<?php echo @__CONTROLLER__;?>
/left.html" frameborder=0 noresize />
                <frame name=right src="<?php echo @__CONTROLLER__;?>
/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>