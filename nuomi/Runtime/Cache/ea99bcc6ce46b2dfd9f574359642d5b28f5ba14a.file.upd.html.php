<?php /* Smarty version Smarty-3.1.6, created on 2015-05-07 12:33:56
         compiled from "F:/20150303/lesson/nuomi/nuomi/Admin/View\Role\upd.html" */ ?>
<?php /*%%SmartyHeaderCode:87505548ddebb0a0d2-54343571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea99bcc6ce46b2dfd9f574359642d5b28f5ba14a' => 
    array (
      0 => 'F:/20150303/lesson/nuomi/nuomi/Admin/View\\Role\\upd.html',
      1 => 1430973224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87505548ddebb0a0d2-54343571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5548ddebbb1a6',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5548ddebbb1a6')) {function content_5548ddebbb1a6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改角色</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》修改角色信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>角色名称</td>
                    <td><input type="text" name="role_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['role_name'];?>
"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改" />
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>