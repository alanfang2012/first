<?php /* Smarty version Smarty-3.1.6, created on 2015-05-05 19:35:41
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:101755548a6c3e29ad4-63604025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bae8d923c3c32a3d4d18ec7d31e31319cefd0f5' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Index\\head.html',
      1 => 1430825738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101755548a6c3e29ad4-63604025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5548a6c3e8287',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548a6c3e8287')) {function content_5548a6c3e8287($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @ADMIN_IMG_URL;?>
header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @ADMIN_IMG_URL;?>
header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo $_SESSION['admin_name'];?>
 &nbsp;&nbsp; 
                    <a style="color: #fff" 
                       href="" 
                       target=main>修改口令</a> &nbsp;&nbsp; 
                    <a style="color: #fff" 
                       onclick="if (confirm('确定要退出吗？'))
                                   return true;
                               else
                                   return false;" 
                       href="<?php echo @__MODULE__;?>
/Manager/logout" target="_top">退出系统</a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @ADMIN_IMG_URL;?>
header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>